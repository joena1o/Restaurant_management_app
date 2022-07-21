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

            include('Classes/reviewClass.php');

            ?>

            <div class="col-lg-9 col-md-12 col-sm-12">
                <br>

                <h4>Customers Reviews</h4><br>


                <div class="contents row">


                    <table class="table table-striped">
                        <tr>
                            <td>Customer Name</td>
                            <td>Email</td>
                            <td>Item ID.</td>
                            <td>Review</td>
                            <td>Rating</td>
                            <td>Date</td>
                           
                            <td>Action 2</td>
                            
                            
                        </tr>

                        <?php

                        $getReviews = new ReviewClass();

                        $arry = $getReviews->fetchreviews();

                        for($i=0; $i<count($arry); $i++){

                            echo "<tr>

                            <td>".$arry[$i]['customer']."</td>
                            <td>".$arry[$i]['email']."</td>
                            <td>".$arry[$i]['item_id']."</td>
                            <td>".$arry[$i]['review']."</td>
                            <td>".$arry[$i]['rating']."</td>
                            <td>".$arry[$i]['date']."</td>
                            
                            <td><Button class='btn btn-danger'>Delete</Button></td>
                        </tr>";



                        }

                       

                        ?>
                    </table>

                    
                    

                    
                    

                </div>


            </div>

        </div>

    
    
</body>
</html>