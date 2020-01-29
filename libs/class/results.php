<?php
    /* --- results.php
     * Work with localtype && areacodes to display search results.
     * Results should be broken into multiple lists:
     * All, Growers, Manufacturers, Et Cetera
     * --- variables
     * areacodes / acarray
     * localtype
     * categories
     * next
     */
    
    /*
     * Work Flow
     *  get vst list
     *  default vst to all
     *  display vst bar
     */
/*    echo('<div align="left"><strong>Searching For: </strong>');
    if(is_array($categories)) {
        foreach($categories as $xlist_id) {
            $stack[] = $V->xlist_names($xlist_id);
        }
        echo(implode(", ", $stack));
    }
    echo("</div>\n");
    echo('<div align="left"><strong>In these area codes:</strong>' . $areacodes . "</div>");
    echo("<br>\n");
*/
    $V->local_vendor_type($vst, $types);
    switch($searchby) {
        case 'ac':
            // local
            $V->find_local_listings($vst, $categories, $acarray, $types, NULL);
            break;
        case 'st':
            // state
            $V->find_local_listings($vst, $categories, NULL, $types, $state);
            break;
        default:
            // national
            $V->find_local_listings($vst, $categories, NULL, $types, NULL);
            break;
    }
    //echo("<hr noshade size=-1>");
    //echo('<div align="center"><strong><a href="' . $_SERVER['PHP_SELF'] . '">New Search</a></strong>');
?>
