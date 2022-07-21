<?php


include('conn.php');



$username = $_POST['username'];
$password = $_POST['password'];

$check = "SELECT * FROM Admin_ WHERE username = '$username' and password='$password' ";

$checkq = mysqli_num_rows(mysqli_query($conn, $check));


if($checkq>0){


    // session_start();

    // $_SESSION['account'] = $user;


    // header('location:../main/dash.php');

    echo "Success";

}else{
    echo "User not identified";
}





?>