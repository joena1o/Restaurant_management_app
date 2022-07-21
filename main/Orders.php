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

            include('Classes/orderClass.php');


            $orderclass = new OrderClass();


            $dataset = $orderclass->getOrders();

            $newdataset =  json_encode($dataset);



            ?>

            <div class="col-lg-9 col-md-12 col-sm-12">
                <br>

                <h4>Pending Orders</h4><br>



                <?php


                    if(isset($_GET['accepted'])){
                        echo "<div class='alert alert-success'>
                        Order Accepted
                        </div>";
                    }


                ?>

            


                <div class="contents row">


                    <table class="table table-striped">
                        <tr>
                            <td>Items Order</td>
                            <td>Price</td>
                            <td>Order Time</td>
                            <td>Status</td>
                            <td>Address</td>
                            <td>Phone Number</td>
                            <td>Customer</td>
                            <td>Action 1</td>
                            <td>Action 2</td>
                        </tr>

                        <?php

                        for($i=0; $i<count($dataset);  $i++){


                            echo '
                            
                            <tr>
                            <td>'.$dataset[$i]['items'].'</td>
                            <td>'.$dataset[$i]['price'].'</td>
                            <td>'.$dataset[$i]['order_time'].'</td>
                            <td>'.$dataset[$i]['paystatus'].'</td>
                            <td>'.$dataset[$i]['recAddress'].'</td>
                            <td>'.$dataset[$i]['phone'].'</td>
                            <td>'.$dataset[$i]['customer'].'</td>
                            <td><form method="post" action='.$orderclass->acceptOrder($dataset[$i]['id']).' ><Button class="btn btn-success" name="AcceptOrder">Accept</Button></form></td>
                            <td><Button class="btn btn-danger">Decline</Button></td>
                        </tr>
                            
                            ';


                        }
                        

                        ?>
                    </table>

                    
                    

                    
                    

                </div>


            </div>

        </div>

    
    
</body>
</html>