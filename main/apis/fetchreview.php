<?php


include("../Classes/conn.php");

if(isset($_POST['user'])){

    $user = mysqli_real_escape_string($conn, $_POST['user']);

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $selectd = "SELECT * FROM reviews WHERE email = '$user' AND item_id = '$id' ";

    $selectQ = mysqli_query($conn,$selectd);

    if($selectQ){

        $array = array();

        while($row = mysqli_fetch_assoc($selectQ)){

            $array[] = $row;

        }

        echo json_encode($array);

    }

}






?>