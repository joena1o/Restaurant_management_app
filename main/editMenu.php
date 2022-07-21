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



            $menuitem = new MenuClass();


            $array = array();

            $id = null;

            if(isset($_GET['id'])){


                $id = $_GET['id'];


               $array = $menuitem->getMenuItem($_GET['id']);

            //    echo json_encode($array);





            }

            ?>




            <div class="col-lg-9 col-md-12 col-sm-12">

            <br>

            <div style='padding:10px calc(100vw*0.05) 10px'>

            <?php echo '<form method="post" action="'.$menuitem->DeleteItem($_GET['id']).'"><Button class="btn btn-danger" name="delete"><i class="fas fa-delete"></i> Delete Item</Button></form>';  ?>
            <br>

            <?php echo "<form method='post'  class='form-group' action='".$menuitem->EditItem($_GET['id'])."'>" ?>

            <input type="text" class="form-control outline-light text-dark" placeholder="Name" name='title'
            value='<?php echo ($id==null)? "" : $array[0]['title']     ?>'
            ><br>


                <input class='form-control' height='10' placeholder='Menu Description' name='desc'
                value='<?php echo ($id==null)? "" : $array[0]['descrip']     ?>'
                >

                <br>
                
                <select class='form-control' name='catId'>
                    <option value='1'>Snacks</option>
                    <option value='6'>Drinks</option>
                    <option value='2'>Dish</option>
                    <option value='5'>Dessert</option>
                </select><br>
                <input type='number' min='1' name='price' class='form-control' height='10' placeholder='Price'
                value='<?php echo ($id==null)? "" : $array[0]['price']     ?>'
                >

                <br>


                <?php

                echo '<img
                src="uploads/'.$array[0]['img1'].'"
                width="12%"
                > <label><b>Current Image</label>';



                ?>
                <br><br>


                <input class='form-control' type='file' name='image'><br>

                
                <button class="btn btn-warning  rounded-5 text-center" name="edit"><i class="fa fa-edit"></i> Edit</button>

                <a href='menu.php' class="btn btn-danger  rounded-5 text-center" name="cancel"><i class="fa fa-cancel"></i> Cancel</a>

            </form>

            <div>
                


            </div>

        </div>
    
</body>
</html>