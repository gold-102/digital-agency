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
    


























        <!--show blog section-->
        <div class="container py-5">
        <div class="row">
        <?php

        $q = "SELECT * FROM blog WHERE id = '$ref'";
        $query = mysqli_query($db, $q);
        $num = mysqli_num_rows($query);
        if($num > 0)
        {
            while($blog = mysqli_fetch_assoc($query)) {

        


        ?>
        <div class="col-8 mx-auto">
        
        <h3 class="text-justify font-weight-bold text-uppercase text-dark my-3"><?php echo $blog['title']; ?></h3>
        <img src="admin/img/<?php echo $blog['image']; ?>" alt="blog" class="img-fluid">

        <p class="text-muted mt-2 text-justify"><?php echo $blog['desc_blog']; ?></p>
        
        </div>

        <?php
            }
            }
        ?>
        
        </div>
        </div>


        <!--end of blog section-->


















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