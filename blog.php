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

































        <!--blog section-->
   <section class="blog py-5" id="blog">
        <div class="container">
                <h2 class="text-left">New Blogs</h2>
                <div class="title-underline bg-danger mb-5 ml-4"></div>

            <div class="row">
 
             <!--blog section-->
             <?php

             $q = "SELECT * FROM blog ORDER BY id DESC";
             $query = mysqli_query($db, $q);
             $num  = mysqli_num_rows($query);
             if($num>0){
                 while($blog = mysqli_fetch_array($query))
                 {

                ?>
                <div class="col-md-8 my-5">
 
                 <!--upload blog section-->
                    <div class="col-md-12 my-3">
                        <div class="row">
                 <div class="col-md-4">
                    <a href="show_blog.php?ref=<?php echo $blog['id']; ?>">
                     <img src="admin/img/<?php echo $blog['image']; ?>" alt="blog" class="img-fluid">
                     </a>
                     
                 </div>

                 <div class="col-md-8" id="padding-blog">
        <h6 class="lead text-uppercase"><a href="show_blog.php?ref=<?php echo $blog['id']; ?>"><?php echo $blog['title']; ?></a></h6>
                 <p></p>
                 <p class="text-justify"><?php echo substr($blog['desc_blog'],0,200); ?></p>
                 </div>
             </div>
             </div>
             <!--end of upload blog section-->
 
 
 
 
                </div>
 
                <!--end of blog section-->
 
 
 
 
 
 
                





















 
 
 
 
 
 
 
 
 
 
                <!--shared blog section-->
                <div class="col-md-4 my-5">
                 <p class="text-left text-uppercase">most popular blogs</p>
                 <div>
                 <p class="text-capitalize"><a href="show_blog.php?ref=<?php echo $blog['id']; ?>">
                 <?php echo $blog['title']; ?></a></p>
             </div>
 
                </div>
 
                 <!--end of shared blog section-->
 
 
 
 
            </div>
            <?php
            }
        }


        ?>
        </div>
    </section>
 
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