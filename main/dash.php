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

        include("Classes/dashClass.php");


        $dashClass = new DashClass();

        $num_menu = $dashClass->getMenuNum();

        ?>

    



            <div class="col-lg-8 col-md-12 col-sm-12">

          


                <div class="contents row">


              

                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                Orders
                            </div>
                            <div class="amount">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                Confirmed Orders
                            </div>
                            <div class="amount">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                Registered Customers
                            </div>
                            <div class="amount">
                                0
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                Reviews
                            </div>
                            <div class="amount">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                Menu
                            </div>
                            <div class="amount">
                                <?php echo $num_menu ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                Categories
                            </div>
                            <div class="amount">
                                4
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                Profits
                            </div>
                            <div class="amount">
                                <i class="fa fa-dollar-sign"></i>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                BroadCast News
                            </div>
                            <div class="amount">
                                <i class="fa fa-microphone"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                Employees
                            </div>
                            <div class="amount">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                               Profile
                            </div>
                            <div class="amount">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 cont-holder">
                        <div class="items">
                            <div class="label">
                                Sign Out
                            </div>
                            <div class="amount">
                                <i class="fa fa-power-off"></i>
                            </div>
                        </div>
                    </div>

                    
                    

                </div>


            </div>

        </div>

    
    
</body>
</html>