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

        include("Widget/Navbar.php");
        include('Classes/getRequest.php');
        include('Classes/menuClass.php');

        ?>

            <div class="col-lg-9 col-md-12 col-sm-12">
                <br>

                <h4>Menu Categories</h4><br>

                <!-- <button class="btn btn-success">New Menu Item</button><br><br> -->


                <div class="contents row">


                    <table class="table table-striped">
                        <tr>
                            <td>ID</td>
                            <td>title</td>
                            <td>No. Items</td>
                            <td>Action 1</td>
                            
                            
                            
                            
                        </tr>
                        <?php

                        $cat = new MenuClass();

                       $no = $cat->getCat();

                        $newdata = $data;

                            for($i=0; $i<4; $i++){
                                echo "
                                <tr>
                                <td>".$newdata[$i]['Id']."</td>
                                <td>".$newdata[$i]['title']."</td>
                                <td>".$no[$i]."</td>
                                <td><Button class='btn btn-warning'>Preview</Button></td>
                               
                                     </tr>";}

                        ?>
                       
                    </table>

                    
                    

                    
                    

                </div>


            </div>

        </div>

    
    
</body>
</html>