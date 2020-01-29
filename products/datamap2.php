<?php
    $quicklaunch = array(
        "manu_imp" => array(
            "adv"   => TRUE,
            "title" => " ",
            "image" => "/imgz/Collage3.gif",
            "img_extra" => "colspan=3",
            "link"  => "manu_imp",
            "desc"  => "<strong>Find a Manufacturer, Exclusive Importer, or Representative</strong> across the nation or in your local area by choosing a category from the selection above",
            "cat"   => "",
            "types" => array(1, 2, 3),
            "ban"   => 34,
            "ac"    => FALSE
        ), 
        "dummy1" => array ( "dummy" => TRUE, "empty" => TRUE ),
        /*
        "manu_rep" => array(
            "adv"   => TRUE,
            "title" => "Manufacturers Representatives",
            "image" => "/imgz/Collage3.gif",
            "img_extra" => "colspan=3",
            "link"  => "manu_rep",
            "desc"  => "Find Manufacturer Representatives across the nation or in your local area.",
            "cat"   => "",
            "types" => array(3),
            "ban"   => 34,
            "ac"    => FALSE
        ), 
        "dummy2" => array ( "dummy" => TRUE, "empty" => TRUE ),
        */
        "plantmat" => array(
            "title" => "Plant Material",
            "image" => "/imgz/icons/plant-icon.gif",
            "link"  => "plantmat",
            "desc"  => "Click here to search for Plant Material in your local area.",
            "cat"   => "",
            "types" => 34,
            "ban"   => 34,
            "ac"    => TRUE,
            "st"    => TRUE
        ),
        "turfgrass" => array(
            "title" => "Turfgrass",
            "image" => "/imgz/icons/plant-icon.gif",
            //"img_extra" => "colspan=3",
            "link"  => "turfgrass",
            "desc"  => "Click here to search for Turfgrass Growers in your local area.",
            "cat"   => array('281', '282'),
            "types" => 34,
            "ban"   => 34,
            "ac"    => TRUE,
            "st"    => TRUE
        ),
        //"dummy3" => array ( "dummy" => TRUE, "empty" => TRUE ),
        "wholesale" => array(
            "title" => "Wholesale Facilities",
            "image" => "/imgz/icons/people-icon.gif",
            "link"  => "wholesale",
            "desc"  => "Click here to search for Wholesale Facilities in your local area.",
            "cat"   => "",
            "types" => array(4),
            "ban"   => 34,
            "ac"    => TRUE,
            "st"    => TRUE
        )
        /*
        ,
        "retail" => array(
            "title" => "Retail Facilities",
            "image" => "/imgz/icons/people-icon.gif",
            "link"  => "retail",
            "desc"  => "Click here to search for Retail Facilities in your local area.",
            "cat"   => "",
            "types" => array(5),
            "ban"   => 34,
            "ac"    => TRUE,
            "st"    => TRUE
        )
        */
    );
    echo "test";
    print_r ($quicklaunch);
?>
