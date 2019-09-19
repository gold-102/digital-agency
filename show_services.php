<?php 
    require_once ('db.php');
    $ref = $_REQUEST['ref'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital agency</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/all.js"></script>
</head>
<body>

   <!--header section-->
   <header class="py-3 bg-light" id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="text-uppercase font-weight-bold"><a href="index.html">digital agency</a></h1>
                </div>
                <div class="col-md-7" id="menus">
                    <ul class=" text-capitalize">
                        <li class="list" id="list-gap"><a href="index.php">home</a></li>

                        <li class="list"><a href="services.php" class="gap">services</a></li>

                        <li class="list"><a href="event.php" class="gap">events</a></li>
                        <li class="list"><a href="blog.php" class="gap">blog<a></li>
                        <li class="list"><a href="about.php" class="gap">about us</a></li>
                        <li class="list"><a href="contact.php" class="gap">contact us</a></li>
                        
                    </ul>
                </div>



                <a href="" class="nav-btn">
                        <i class="fas fa-bars fa-1x" style="color: #dc3545!important"></i>
                    </a>




            </div>
        </div>
    </header>
    <!--end of header section-->
    


























    <!--show services section-->
    <div class="container">
    
        <div class="row">

        <?php
        $q = "SELECT * FROM services WHERE id = '$ref'";
        $query = mysqli_query($db, $q);
        $num = mysqli_num_rows($query);
        if($num > 0)
        {
            while($s = mysqli_fetch_assoc($query)) {



        ?>

        <div class="col-8 mx-auto">
        <h1 class="text-left text-uppercase text-danger my-3 font-weight-bold">
        <?php echo $s['name']; ?></h1>

        <p class="lead text-justify text-muted"><?php echo $s['detail']; ?></p>

        
        
        </div>
        <?php

            }
        }
        ?>


        </div>
        </div>
    <!--end of service -->







    
         <!--footer last-->
         <section id="footer">
            <p class="text-capitalize text-white text-center">&copy;all rights reserved</p>
        </section>
    
        <!--end of last-->
    
    
    
    
    
        <!--script-->
        <script src="js/jquery.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
    </html>