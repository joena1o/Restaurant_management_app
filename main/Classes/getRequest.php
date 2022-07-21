<?php


    include('conn.php');


    $select = mysqli_query($conn,"SELECT * FROM categories");

    $array = array();


    while($row = mysqli_fetch_assoc($select)){

        $array[] = $row;

    }

    $data = $array;



?>