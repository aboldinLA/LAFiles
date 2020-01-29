<?php

/*
 * HTML Friendly
 *  Strip slashes, convert special characters to HTML equivalents
 */

// strips slashes, and converts special characters to HTML equivalents for string defined in $var
function htmlfriendly($var, $nl2br = false) {
    $chars = array(
        128 => '&#8364;',
        130 => '&#8218;',
        131 => '&#402;',
        132 => '&#8222;',
        133 => '&#8230;',
        134 => '&#8224;',
        135 => '&#8225;',
        136 => '&#710;',
        137 => '&#8240;',
        138 => '&#352;',
        139 => '&#8249;',
        140 => '&#338;',
        142 => '&#381;',
        145 => '&#8216;',
        146 => '&#8217;',
        147 => '&#8220;',
        148 => '&#8221;',
        149 => '&#8226;',
        150 => '&#8211;',
        151 => '&#8212;',
        152 => '&#732;',
        153 => '&#8482;',
        154 => '&#353;',
        155 => '&#8250;',
        156 => '&#339;',
        158 => '&#382;',
        159 => '&#376;'
       );

    $var = str_replace(array_map('chr', array_keys($chars)), $chars, htmlentities(stripslashes($var)));

    if($nl2br){
        return nl2br($var);
    } else {
        return $var;
    }
}

function cleanmeta($var) {
    $chars = array(
        128 => '&#8364;',
        130 => '&#8218;',
        131 => '&#402;',
        132 => '&#8222;',
        133 => '&#8230;',
        134 => '&#8224;',
        135 => '&#8225;',
        136 => '&#710;',
        137 => '&#8240;',
        138 => '&#352;',
        139 => '&#8249;',
        140 => '&#338;',
        142 => '&#381;',
        145 => '&#8216;',
        146 => '&#8217;',
        147 => '&#8220;',
        148 => '&#8221;',
        149 => '&#8226;',
        150 => '&#8211;',
        151 => '&#8212;',
        152 => '&#732;',
        153 => '&#8482;',
        154 => '&#353;',
        155 => '&#8250;',
        156 => '&#339;',
        158 => '&#382;',
        159 => '&#376;'
       );
    $var = str_replace(array_map('chr', array_keys($chars)), $chars, stripslashes($var));
    return($var);
}

/* Auto Paragraph
 *  converts double newlines to paragraph tags (open and closed) 
 *  if $br, make line breaks within the <p> tags
 *  this depends on there being double newlines at the end of raw text being input
 *  in the case of some of our articles, this isn't guarunteed.
 */
function autoParagraph($inp, $br=1) {
     $inp = preg_replace("/(\r\n|\n|\r)/", "\n", $inp); // cross-platform newlines
     $inp = preg_replace("/\n\n+/", "\n\n", $inp); // take care of duplicates
     $inp = preg_replace('/\n?(.+?)(\n\n|\z)/s', "<p>$1</p>\n", $inp); // make paragraphs, including one at the end
     if ($br) $inp = preg_replace('|(?<!</p>)\s*\n|', "<br />\n", $inp); // optionally make line breaks
     return $inp;
}

/* exAutoParagraph
 *  attempts to allow limited block level tags in the raw text
 */
function exAutoParagraph($inp, $br=1) {
     $inp = $inp . "\n"; // just to make things a little easier, pad the end
     $inp = preg_replace('|<br />\s*<br />|', "\n\n", $inp);
     $inp = preg_replace('!(<(?:table|ul|ol|li|pre|form|blockquote|h[1-6])[^>]*>)!', "\n$1", $inp); // Space things out a little
     $inp = preg_replace('!(</(?:table|ul|ol|li|pre|form|blockquote|h[1-6])>)!', "$1\n", $inp); // Space things out a little
     $inp = preg_replace("/(\r\n|\r)/", "\n", $inp); // cross-platform newlines 
     $inp = preg_replace("/\n\n+/", "\n\n", $inp); // take care of duplicates
     $inp = preg_replace('/\n?(.+?)(?:\n\s*\n|\z)/s', "\t<p>$1</p>\n", $inp); // make paragraphs, including one at the end 
     $inp = preg_replace('|<p>\s*?</p>|', '', $inp); // under certain strange conditions it could create a P of entirely whitespace 
     $inp = preg_replace("|<p>(<li.+?)</p>|", "$1", $inp); // problem with nested lists
     $inp = preg_replace('|<p><blockquote([^>]*)>|i', "<blockquote$1><p>", $inp);
     $inp = str_replace('</blockquote></p>', '</p></blockquote>', $inp);
     $inp = preg_replace('!<p>\s*(</?(?:table|tr|td|ul|ol|li|pre|select|form|blockquote|p|h[1-6])[^>]*>)!', "$1", $inp);
     $inp = preg_replace('!(</?(?:table|tr|td|ul|ol|li|pre|select|form|blockquote|p|h[1-6])[^>]*>)\s*</p>!', "$1", $inp); 
     if ($br) $inp = preg_replace('|(?<!<br />)\s*\n|', "<br />\n", $inp); // optionally make line breaks
     $inp = preg_replace('!(</?(?:table|tr|td|dl|dd|dt|ul|ol|li|pre|select|form|blockquote|p|h[1-6])[^>]*>)\s*<br />!', "$1", $inp);
     $inp = preg_replace('!<br />(\s*</?(?:p|li|pre|td|ul|ol)>)!', '$1', $inp);
     $inp = preg_replace('/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $inp);
     
     return $inp; 
}

?>
