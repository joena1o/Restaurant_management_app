<?php

class DashClass{


    public function getMenuNum(){

        include('conn.php');

        $select = "SELECT * FROM menu";

        $selectNum = mysqli_num_rows(mysqli_query($conn, $select));


        return $selectNum;



    }



}


?>