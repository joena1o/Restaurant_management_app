<?php


include('../Classes/conn.php');

$items = mysqli_real_escape_string($conn, $_POST['items']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$paystatus = 'Pending';
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$customer = mysqli_real_escape_string($conn, $_POST['customers']);

$user = mysqli_real_escape_string($conn, $_POST['user']);

$insert = "INSERT INTO newOrders(items,price,paystatus,recAddress,phone,customer,email) VALUES ('$items','$price','$paystatus','$address','$phone','$customer','$user')"; 

$insq = mysqli_query($conn, $insert);

if($insq){

    $delete = "DELETE FROM cart WHERE user = '$user' ";

    $deleteq = mysqli_query($conn, $delete);

    if($deleteq){

        echo 'Sent';

    }


    
}else{
    echo 'Failed';
    echo mysqli_error($conn);
}


?>