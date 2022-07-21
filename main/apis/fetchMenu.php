<?php


include('../Classes/conn.php');


$select = "SELECT * FROM menu";

$selectq = mysqli_query($conn, $select);

$arry=  array();

while($row = mysqli_fetch_assoc($selectq)){

    $arry[] = $row; 


}

echo json_encode($arry);



?>