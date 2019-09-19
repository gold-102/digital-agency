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



















        <!--contact-->
        <section class="py-5 bg-dark" id="contact">
            <div class="container">
                <h2 class="text-center text-light text-uppercase">contact section</h2>
                <div class="title-underline bg-danger mx-auto mb-5"></div>
                <div class="row">
                <div class="col-md-6 col-12 ">

                                <p class="text-center text-white text-uppercase">contact us</p>
                                <form action="store_data.php" method="post" onsubmit="return formSubmit()">
                            
                                <p id="error" class="text-uppercase font-weight-bold text-center text-danger" style="font-family: serif"></p>

                                <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name..." autocomplete="off">
                                </div>

                                <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email..." autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                            <textarea name="msg" class="form-control" id="msg" cols="30" rows="3" placeholder="Drop Your Message..." autocomplete="off"></textarea>
                                        </div>

                                        <div align="center">
                                                <input type="submit" class="btn btn-success" name="submit" value="Send Message">
                    
                                            </div>
                        </form>



                </div>


                <div class="col-md-6 col-12 " id="con-gap">
                    <div align="center">
                    <h5 class=" text-capitalize text-white ">office info</h5>
                        <p class="font-weight-bold lead text-white"><span class="fa fa-envelope" aria-hidden="true"></span> digitalagency@gmail.com</p>
                        <p class="font-weight-bold lead text-white"><span class="fa fa-phone" aria-hidden="true"></span> 0120-4444 888</p>
                    </div>
                    </div>

                </div>
            </div>
        </section>

        <!--end of contact section-->






















          <!--footer last-->
    <section id="footer">
            <p class="text-capitalize text-white text-center">&copy;all rights reserved</p>
        </section>
    
        <!--end of last-->
    
    
    
    
    
        <!--script-->
        <script src="js/app.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
    </html>



