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

    ?>

            <div class="col-lg-9 col-md-12 col-sm-12">
                <br>

                <h4>Broadcast Notice</h4><br>

                <button class="btn btn-success" data-toggle='modal' data-target='#exampleModal'>Compose New</button><br><br>


                <h4>Previous Broadcast</h4><br>


                <div class="contents row">

                    

                    <table class="table table-striped">
                        <tr>
                            <td>ID</td>
                            <td>title</td>
                            <td>Description</td>
                            <td>Date</td>
                            <td>Action 1</td>
                            <td>Action 2</td>
                            
                            
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>title</td>
                            <td>Description</td>
                            <td>Date</td>
                            <td><Button class="btn btn-warning">Resend</Button></td>
                            <td><Button class="btn btn-danger">Delete</Button></td>
                        </tr>
                    </table>

                    
                    

                    
                    

                </div>


            </div>

        </div>

    
    
        <?php

            include("Widget/Modals/broadcastModal.php");

        ?>

</body>
</html>