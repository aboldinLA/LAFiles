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
    switch($searchby) {
        case 'ac':
            $M->find_some($acarray, $categories, 2, $q['pro'], $q['reg']);
            break;
        case 'st':
            $M->find_some($state, $categories, 2, $q['pro'], $q['reg']);
            break;
    }
?>
