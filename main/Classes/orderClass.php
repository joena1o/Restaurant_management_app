<?php


class OrderClass{







function getOrders(){

    include('conn.php');

    $fetch = "SELECT * FROM newOrders";

    $fetchq = mysqli_query($conn, $fetch);

    $array = array();


    if($fetchq){


            while($row = mysqli_fetch_assoc($fetchq)){


                $array[] = $row;


            }


            return $array;

    }else{

         return [];


    }




}

function acceptOrder($id){

    include('conn.php');

    if(isset($_POST['AcceptOrder'])){

        $update = "UPDATE newOrders set paystatus = 'Accepted' WHERE id='$id' ";

        $updateq = mysqli_query($conn, $update);

        if($updateq){

            header('../Orders.php?accepted=true');

        }

    }


}




}


?>