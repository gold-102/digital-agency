<?php 
    require_once ('db.php');
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
    
    

















     <!--main section-->
     <section class="main py-5" id="main">
            <div class="container">
                    <h1 class="display-4 text-center font-weight-bold text-uppercase text-danger">explore, dream & create</h1>
                    <div align="center">
                <button class="btn btn-info btn-lg text-uppercase">discover advertising</button>
            </div>
            </div>
        </section>
        <!--end of main section-->






























        <!--service-->
        <section class="py-5 bg-light" id="service">
            <div class="container-fluid">
                <h2 class="text-center text-uppercase">our services</h2>
                <div class="title-underline bg-danger mx-auto "></div>
                <div class="row my-5" >

                <?php

                $q="SELECT * FROM services ORDER BY id DESC";
                $query = mysqli_query($db, $q);
                $num = mysqli_num_rows($query);
                if($num>0)
                {
                    while($ser = mysqli_fetch_array($query))
                    {

                


                ?>
                    <div class="col-md-4 col-12" id="grid">
                        <div id="adv">
                            <div class="serv-title mb-5">
                         <h3 class="text-center text-white text-uppercase">
                         <?php echo $ser['name']; ?></h3>
                            <div class="title-underline bg-white mx-auto"></div>
                            </div>
                            
                            <a href="show_services.php?ref=<?php echo $ser['id']; ?>">
                            <div align="center" class="mb-5">
                                    <button class="btn btn-outline-light">Read more...</button>
                                </div>
                                </a>
                        </div>
                        
                    </div>

                    <?php

                        }
                    }
                    ?>








                </div>
            </div>
        </section>

        <!--end of service-->
























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
