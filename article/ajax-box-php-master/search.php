<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","landscap_lol","meow2meow");
    $db=mysql_select_db("landscap_lollive",$con);
    $query=mysql_query("select * from xlist where name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['name'];
    }
    echo json_encode($array);
?>
