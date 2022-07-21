<?php


include('../Classes/conn.php');


if(isset($_POST['search'])){

    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $cat = mysqli_real_escape_string($conn, $_POST['cat']);

    if($cat == 'none'){
        $select = "SELECT * FROM menu WHERE title LIKE '%$search%' ";
    }else{
        $select = "SELECT * FROM menu WHERE title LIKE '%$search%' and catId = '$cat' ";
    }

   

    $selectq = mysqli_query($conn, $select);

    if($selectq){

        $array = array();

        while($row = mysqli_fetch_assoc($selectq) ){

            $array[] = $row;

        }

        echo json_encode($array);

    }

}











?>