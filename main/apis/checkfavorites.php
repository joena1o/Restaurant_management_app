<?php

include("../Classes/conn.php");

if(isset($_POST['user']) && isset($_POST['id'])){

    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $check = "SELECT * FROM users_favorite WHERE user = '$user' and item_id = '$id' ";


    $checkq = mysqli_query($conn, $check);

    if(mysqli_num_rows($checkq)>0){
        echo "check";
    }else{
        echo "unchecked";
    }


}







?>