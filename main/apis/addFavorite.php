<?php



include('../Classes/conn.php');


$user = mysqli_real_escape_string($conn, $_POST['user']);
$itemId = mysqli_real_escape_string($conn, $_POST['item']);

if(isset($user)){



$check = "SELECT * FROM users_favorite WHERE user = '$user'and item_id = '$itemId' ";

$num = mysqli_num_rows(mysqli_query($conn, $check));

if($num==0){

    $insert = "INSERT INTO users_favorite(user,item_id) VALUES('$user','$itemId')";

        $insertq = mysqli_query($conn, $insert);

        if($insertq){
            echo "added";
        }else{
            echo "failed";
        }


}else{

    $delete = "DELETE FROM users_favorite WHERE user='$user' and item_id='$itemId'";

    $deleteq = mysqli_query($conn, $delete);

    if($deleteq){
        echo "removed";
    }else{
        echo "failed";
    }

}

}





?>