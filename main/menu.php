<?php

        if(isset($_POST['add'])){


            include('Classes/conn.php');

            $title = $_POST['title'];
            $descrip = $_POST['desc'];
            $price = $_POST['price'];
            $catId = $_POST['catId'];
            $pic = $_FILES['image'];


            $picname = $pic['name'];
		    $pic_tmp = $pic['tmp_name'];
		    $picsize = $pic['size'];
          

            $picExt = explode(".",$picname);
            $extActual = strtolower(end($picExt));
   
            $format = array("jpg","jpeg","png");
   
            $destination = "uploads/".$picname;
   
            move_uploaded_file($pic_tmp,$destination);


            $insert = "INSERT INTO menu(title,descrip,price,catId,img1) VALUES('$title','$descrip'
            ,'$price','$catId','$picname') ";

           $insertq = mysqli_query($conn, $insert);

           if($insertq){
               header("location:menu.php?success=true");
           }


          

        }





?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../Scripts/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/js/all.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Document</title>
</head>
<body>


            <?php

            include('Classes/menuClass.php');           

            include("Widget/Navbar.php");

            ?>




            <div class="col-lg-9 col-md-12 col-sm-12" >

            <br>


            <?php


            if(isset($_GET['success'])){
                
                    echo "<div class='alert alert-success'>
                
                    Menu Item added successfully
                    
                    </div>";                
                
            }

            if(isset($_GET['edited'])){
                
                echo "<div class='alert alert-warning'>
            
                Menu Item edited successfully
                
                </div>";                
            
        }

        if(isset($_GET['deleted'])){
                
            echo "<div class='alert alert-danger'>
        
            Menu Item deleted successfully
            
            </div>";                
        
    }






        ?>

                <br>

                <h4>Menu</h4><br>

                <button class="btn btn-success" data-toggle='modal' data-target='#exampleModal' >New Menu Item</button><br><br>


                <div class="contents row">


                    <table class="table table-striped">
                        <tr>
                            <td>ID</td>
                            <td>title</td>
                            <td>Description</td>
                            <td>Price</td>
                            <td>Images</td>
                            <!-- <td>Variations</td> -->
                            <td>Category</td>
                            <td>Action 1</td>
                            
                            
                            
                        </tr>

                        <?php

                        $getMenu = new MenuClass();

                        $arry = $getMenu->getMenuItems();

                        

                        for($i=0; $i<count($arry);$i++){
                            echo '<tr>
                            <td>'.$arry[$i]['id'].'</td>
                            <td>'.$arry[$i]['title'].'</td>
                            <td>'.$arry[$i]['descrip'].'</td>
                            <td>'.$arry[$i]['price'].'</td>
                            <td><img src="uploads/'.$arry[$i]['img1'].'" width="70px" /></td>
                            <!-- <td>Variations</td> -->
                            <td>'.$arry[$i]['catId'].'</td>
                            <td><a href="editMenu.php?id='.$arry[$i]['id'].'" class="btn btn-warning">Edit</Button></td>
                            
                        </tr>';

                       


                        }
                        
                        ?>
                    </table>

                    
                    

                    
                    

                </div>


            </div>

        </div>


        <?php  

            include('Widget/Modals/newMenuItem.php');

           

        ?>
    
</body>



</html>