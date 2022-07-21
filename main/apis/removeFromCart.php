<?php






include('../Classes/conn.php');


$user = mysqli_real_escape_string($conn, $_POST['user']);

$id = mysqli_real_escape_string($conn, $_POST['item']);


if(isset($user) && isset($id)){

    $delete = "DELETE FROM cart WHERE user='$user' and item_id='$id' ";

    $deleteq = mysqli_query($conn, $delete);

    if($deleteq){
        echo "removed";
    }else{
        echo "failed";
    }

}










?>