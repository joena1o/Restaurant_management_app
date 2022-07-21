<?php


class ReviewClass{


    public function fetchreviews(){

        include('conn.php');


        $select = "SELECT * FROM reviews";

        $selectq = mysqli_query($conn, $select);

        if($selectq){

            $array = array();

            while($row = mysqli_fetch_assoc($selectq)){

                $array[] = $row;

            }

            return $array;



        }else{

            return null;

        }

    }



}















?>