<?php



include('../Classes/conn.php');

if($_POST['user']){


$user = mysqli_real_escape_string($conn, $_POST['user']);
$itemId = mysqli_real_escape_string($conn, $_POST['item']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);


$select = "SELECT *  FROM cart WHERE user ='$user' and item_id = '$itemId'  ";

$selectq = mysqli_query($conn, $select);

if(mysqli_num_rows($selectq)>0){


    $update = "UPDATE cart SET price = '$price' , quantity = '$quantity' WHERE user ='$user' and item_id = '$itemId'  ";

    $updateq = mysqli_query($conn, $update);

    if($updateq){

        echo "added";

    }else{
    
        echo "failed";
    
    }
    


}else{


$insert = "INSERT INTO cart(user,item_id,price,quantity) VALUES('$user','$itemId','$price','$quantity')";

$insertq = mysqli_query($conn, $insert);


if($insertq){

    echo "added";

}else{

    echo "failed";

}



}
}












?>