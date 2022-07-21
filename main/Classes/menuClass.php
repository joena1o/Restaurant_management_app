<?php

include('conn.php');

class MenuClass{



    public function AddMenuItems(){

        

    }   
   


    public function getMenuItems(){

        include('conn.php');

        $dataset = array();
        

        $select = "SELECT * FROM menu";

        $selectq = mysqli_query($conn, $select);
        
        while($row = mysqli_fetch_assoc($selectq)){

           $dataset[] = $row;

        }

        
        return $dataset;

    }


    public function getMenuItem($id){

        include('conn.php');

        $dataset = array();
        

        $select = "SELECT * FROM menu WHERE id = '$id' ";

        $selectq = mysqli_query($conn, $select);
        
        while($row = mysqli_fetch_assoc($selectq)){

           $dataset[] = $row;

        }

        
        return $dataset;

    }


    public function getCat(){

        include('conn.php');
        $snacks = 0;
        $dish = 0;
        $dessert = 0;
        $drinks = 0;
    
    
        $select = "SELECT * FROM menu";
    
        $selectq = mysqli_query($conn,$select);
    
    
        while($row=mysqli_fetch_assoc($selectq)){
    
            if($row['catId'] == 2 )
                $dish++;
            else if($row['catId'] == 1 )
                $snacks++;   
            else if($row['catId'] == 5 )
                $dessert++;
            else
                $drinks++;        
    
        }


        return array($snacks,$dish,$dessert,$drinks);
    
    }


    public function DeleteItem($id){

        include('conn.php');

        if(isset($_POST['delete'])){

        $delete = "DELETE FROM menu WHERE id = '$id' ";

      

        $deleteq = mysqli_query($conn, $delete);


        if($deleteq){
            header("location: ../main/menu.php?deleted=true");
        }else{

        }

        }

        



    }


    public function EditItem($id){


        include('conn.php');


        if(isset($_POST['edit'])){

            
         $title = mysqli_real_escape_string($conn,$_POST['title']);
         $desc = mysqli_real_escape_string($conn,$_POST['desc']);
         $price = mysqli_real_escape_string($conn,$_POST['price']);
         $cat = mysqli_real_escape_string($conn,$_POST['catId']);


        if(isset($_FILES['image'])){



        }else{

            $update = "UPDATE menu SET title='$title' , descrip='$desc' , price
            = '$price' , catId = '$cat' WHERE id = '$id' ";

            $updateq = mysqli_query($conn, $update);


            if($updateq){


                header("location: ../main/menu.php?edited=true");

               
            }

        }



        }




    }



}

















?>