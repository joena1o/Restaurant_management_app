<?php



include('../Classes/conn.php');

if(isset($_POST['email'])){


    
    $customer = mysqli_real_escape_string($conn, $_POST['customer']);
    $itemId = mysqli_real_escape_string($conn, $_POST['item_id']);
    $review = mysqli_real_escape_string($conn, $_POST['review']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $insert = "INSERT INTO reviews(customer,email,item_id,review,rating) 
    VALUES('$customer','$email','$itemId',
    '$review','$rating')";

    $insertq = mysqli_query($conn, $insert);


    if($insertq){
        echo "Insert"; 
    }else{
        echo "Failed";
    }



}else{



}





?>