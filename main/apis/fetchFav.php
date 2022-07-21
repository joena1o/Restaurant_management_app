<?php


include('../Classes/conn.php');

$user = mysqli_real_escape_string($conn, $_POST['user']);


$select = "SELECT * FROM users_favorite INNER JOIN menu ON (users_favorite.item_id = menu.id) WHERE user = '$user' ";

$selectq = mysqli_query($conn, $select);

$arry=  array();

while($row = mysqli_fetch_assoc($selectq)){

    $arry[] = $row; 


}

echo json_encode($arry);



?>