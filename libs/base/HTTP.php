<?php
//
// +----------------------------------------------------------------------+
// | PHP Version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2003 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.02 of the PHP license,      |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/2_02.txt.                                 |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Stig Bakken <ssb@fast.no>                                   |
// |                                                                      |
// +----------------------------------------------------------------------+
//
// $Id: HTTP.php,v 1.23 2004/02/24 11:25:24 pajoye Exp $
//
// HTTP utility functions.
//

class HTTP
{
    /**
     * Format a RFC compliant HTTP header.  This function
     * honors the "y2k_compliance" php.ini directive.
     *
     * @param int $time UNIX timestamp
     *
     * @return mixed HTTP date string, or false for an invalid timestamp.
     *
     * @author Stig Bakken <ssb@fast.no>
     * @author Sterling Hughes <sterling@php.net>
     */
    function Date($time)
    {
        /* If we're y2k compliant, use the newer, reccomended RFC 822
           format */
        if (ini_get("y2k_compliance") == true) {
            return gmdate("D, d M Y H:i:s \G\M\T", $time);
        }
        /* Use RFC-850 which supports two character year numbers */
        else {
            return gmdate("F, d-D-y H:i:s \G\M\T", $time);
        }
    }

    /**
     * Negotiate language with the user's browser through the
     * Accept-Language HTTP header or the user's host address.
     * Language codes are generally in the form "ll" for a language
     * spoken in only one country, or "ll-CC" for a language spoken in
     * a particular country.  For example, U.S. English is "en-US",
     * while British English is "en-UK".  Portugese as spoken in
     * Portugal is "pt-PT", while Brazilian Portugese is "pt-BR".
     * Two-letter country codes can be found in the ISO 3166 standard.
     *
     * Quantities in the Accept-Language: header are supported, for
     * example:
     *
     *  Accept-Language: en-UK;q=0.7, en-US;q=0.6, no;q=1.0, dk;q=0.8
     *
     * @param array $supported an associative array indexed by language
     * codes (country codes) supported by the application.  Values
     * must evaluate to true.
     *
     * @param string $default the default language to use if none is found
     * during negotiation, defaults to "en-US" for U.S. English
     *
     * @return string the negotiated language result
     *
     * @author Stig Bakken <ssb@fast.no>
     */
    function negotiateLanguage(&$supported, $default = 'en-US')
    {
        $supported = array_change_key_case($supported, CASE_LOWER);

        /* If the client has sent an Accept-Language: header, see if
         * it contains a language we support.
         */
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $accepted = split(',[[:space:]]*', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
            for ($i = 0; $i < count($accepted); $i++) {
                if (eregi('^([a-z_-]+);[[:space:]]*q=([0-9\.]+)', $accepted[$i], $arr)) {
                    $q = (double)$arr[2];
                    $l = $arr[1];
                } else {
                    $q = 42;
                    $l = strtolower($accepted[$i]);
                }

                if (!empty($supported[$l]) && ($q > 0.0)) {
                    if ($q == 42) {
                        return $l;
                    }
                    $candidates[$l] = $q;
                }
            }
            if (isset($candidates)) {
                arsort($candidates);
                reset($candidates);
                return key($candidates);
            }
        }

        /* Check for a valid language code in the top-level domain of
         * the client's host address.
         */
        if (isset($_SERVER['REMOTE_HOST']) &&
            ereg("\.[^\.]+$", $_SERVER['REMOTE_HOST'], $arr)) {
            $lang = strtolower($arr[1]);
            if (!empty($supported[$lang])) {
                return $lang;
            }
        }

        return $default;
    }

    /**
    * Sends a "HEAD" HTTP command to a server and returns the headers
    * as an associative array. Example output could be:
    *    Array
    *    (
    *        [response_code] => 200          // The HTTP response code
    *        [response] => HTTP/1.1 200 OK   // The full HTTP response string
    *        [Date] => Fri, 11 Jan 2002 01:41:44 GMT
    *        [Server] => Apache/1.3.20 (Unix) PHP/4.1.1
    *        [X-Powered-By] => PHP/4.1.1
    *        [Connection] => close
    *        [Content-Type] => text/html
    *    )
    *
    * @param string $url A valid url, for ex: http://pear.php.net/credits.php
    * @return mixed Assoc array or PEAR error
    *
    * @author Tomas V.V.Cox <cox@idecnet.com>
    */
    function head($url)
    {
        $purl = parse_url($url);
        $port = (isset($purl['port'])) ? $purl['port'] : 80;
        $fp = @fsockopen($purl['host'], $port, $errno, $errstr, 10);
        if (!$fp) {
            include_once "PEAR.php";
            return PEAR::raiseError("HTTP::head error $errstr ($erno)");
        }
        $path = (!empty($purl['path'])) ? $purl['path'] : '/';
        $path .= (!empty($purl['query'])) ? '?' . $purl['query'] : '';

        fputs($fp, "HEAD $path HTTP/1.0\r\n");
        fputs($fp, "Host: " . $purl['host'] . "\r\n");
        fputs($fp, "Connection: close\r\n\r\n");

        $response = rtrim(fgets($fp, 4096));
        if(preg_match("|^HTTP/[^\s]*\s(.*?)\s|", $response, $status)) {
            $headers['response_code'] = $status[1];
        }
        $headers['response'] = $response;

        while ($line = fgets($fp, 4096)) {
            if (!trim($line)) {
                break;
            }
            if (($pos = strpos($line, ':')) !== false) {
                $header = substr($line, 0, $pos);
                $value  = trim(substr($line, $pos + 1));
                $headers[$header] = $value;
            }
        }
        fclose($fp);
        return $headers;
    }

    /**
    * This function redirects the client. This is done by issuing
    * a Location: header and exiting.
    *
    * @author Richard Heyes <richard@php.net>
    * @param  string $url URL where the redirect should go to
    */
    function redirect($url)
    {
        if (!preg_match('/^(https?|ftp):\/\//', $url)) {
            $server = 'http' . (@$_SERVER['HTTPS'] == 'on' ? 's' : '') . '://' . $_SERVER['SERVER_NAME'];
            if ($_SERVER['SERVER_PORT'] != 80 &&
                $_SERVER['SERVER_PORT'] != 443) {
                $server .= ':' . $_SERVER['SERVER_PORT'];
            }
			
			$path = dirname($_SERVER['PHP_SELF']);
            if ($url{0} != '/') {
				$path   .= $url;
                $server .= dirname($_SERVER['PHP_SELF']);
                $url = $server . '/' . preg_replace('!^\./!', '', $url);
            } else {
                $url = $server . $url;
            }
        }

        header('Location: ' . $url);
        exit;
    }
}
?>
