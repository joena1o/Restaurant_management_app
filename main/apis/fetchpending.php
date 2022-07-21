<?php



include("../Classes/conn.php");


if(isset($_POST['user'])){


    $user = mysqli_real_escape_string($conn, $_POST['user']);


    $select = "SELECT * FROM newOrders WHERE email = '$user' ";

    $selectq = mysqli_query($conn, $select);

    $array = array();

    if($selectq){

        while($row = mysqli_fetch_assoc($selectq)){

            $array[] = $row;

        }

    }

    echo json_encode($array);



}












?>