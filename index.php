<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Technology</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/lity.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media-queries.css" rel="stylesheet">
    <link href="css/color/violet.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>


<body id="top">
    <?php
			$username = "webandhotel";
			$servername = "db4free";
			$password = "webandhotel2021";
			$dbname = "webandhotel";
				
			$con = mysqli_connect($servername,$username,$password,$dbname);
			
			if(!$con)
			{
				die("connection falied: <br/>" . mysqli_connect_error());
			}
			echo "connected successfully";
            
			// $s = "insert into contact ( email , name, message)  values ( '$_GET[email]' , '$_GET[name]' , '$_GET[message]')";
			
			// if(!(mysqli_query($con , $s)))
			// 	echo "not add :" . mysqli_error($con);	
			
			mysqli_close($con);
		?>

    <nav id="navigation" class="navbar no-scrolled">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="burger-menu">
                            <span class="burger"></span>  
                        </span>
                    </button>


                <a class="navbar-brand" href="#">
                   <img src="images/logo-md.png">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#mw_aboutus">About Us</a></li>
                    <li><a href="#mw_services">Our Services</a></li>
                    <li><a href="#why_mw">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header id="header-1">
        <!-- Header slider -->
        <div id="header-carousel">
            <!-- Slide 1 -->
            <div class="slide">
                <div class="background-img" style="background-image: url(images/slide1.jpg)"></div>
                <div class="header-masc">
                    <!-- Background animation -->
                    <div class="space-header">
                        <div class="stars"></div>
                    </div>
                    <!-- Background animation end-->
              

                    <!-- Background animation end -->
                    <div class="container header-container">
                         <div class="row">


                            <div class="col-md-4"></div>

                            <div class="col-md-7 col-sm-12 main-title">
                                    <!-- Main header title -->
                                    <h3 class="white"><b>you're in right place!</b></h3>
                      
                                </div>
                            </div>
                    </div>
                </div>
            </div>





<!-- Slide 1 -->
            <div class="slide">
                <div class="background-img" style="background-image: url(https://image.freepik.com/free-vector/abstract-lines-forming-tunner-shape-background_1017-12765.jpg)"></div>
                <div class="header-masc">
                    <!-- Background animation -->
                    <div class="space-header">
                        <div class="stars"></div>
                    </div>
                    <!-- Background animation end-->
              

                    <!-- Background animation end -->
                    <div class="container header-container">
                        <div class="row">


                            <div class="col-md-2"></div>

                            <div class="col-md-7 col-sm-12 main-title">
                                    <!-- Main header title -->
                                    <h1 class="white"><b>Shopping Technology</b></h1>
                      
                                </div>
                            </div>
                 
                    </div>
                </div>
            </div>



            
            <!-- Slide 2 -->
            <div class="slide">
                <div class="background-img" style="background-image: url(https://image.freepik.com/free-vector/abstract-dark-halftone-background-design_1017-15505.jpg)"></div>
                <div class="header-masc">
                    <!-- Background animation -->
                    <div class="space-header">
                        <div class="stars"></div>
                    </div>
                    <!-- Background animation end-->
                 

                    <!-- Social icons end -->
                    <!-- Background animation end -->
                    <div class="container header-container">
                        <div class="row">
                         



                         <div class="col-md-2"></div>

                            <div class="col-md-7 col-sm-12 main-title">
                                <div class="typed_wrap">
                                    <!-- Main header title -->
                                    <h1 class="white">Shopping Technology</b> </h1>
                                    <!-- Main header suptitle -->
                                    <h3 class="white"><i>We're Inventor</i></h3>
                                    <br>
                              

                                </div>
                            </div>
       

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end-->






<section id="mw_aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h3 class="title-section wow fadeInUp">About us!</h3>
                <p class="text-justify wow fadeInUp" style="padding-right: 10px;">
                   Welcome to Shopping technology
Great technology has the power to make life a little easier and a lot more fun! Whether you're looking to purchase some practical tech like a dash cam or a handy sat nav to get you from A to B, or you're after next-level entertainment in the form of a brand-new 4K television or a gaming console, you've come to exactly the right place.
no worries and choose your products on shopping technology
                </p>



            </div>
            <div class="col-md-6">
                <br>

<div style="margin-top: 20px;">
            <img src="images/office.jpg" alt="Untitled-15" class="img-responsive">

</div>


            </div>
        </div>
    </div>
</section>

    <!-- Start section -->
    <section class="mw-abstract2" id="mw_services">
        <div class="padding-masc">
            <div class="container">


   <h3>Our Products</h3>

<br>

            </div>
        </div>

      <div class="row">

                <div class=" col-md-3" style="background: #fff;box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);">
                    <a href="tv.html">
                  <img src="products/3.png" class="center-block">
                    <h4><center>TV </center>
                    </h4>
                    </a>

                   <br>

                    <a href="tv.html" class="btn btn-primary">More...</a>

                </div>



                <div class=" col-md-3" style="background: #fff;box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);">
                    <a href="laptop.html">
                  <img src="products/8.png" class="center-block">
                    <h4><center>Laptop <br>  </center></h4>
                    </a>

                    <br>

                    <a href="laptop.html" class="btn btn-primary">More...</a>

                </div>



 <div class=" col-md-3" style="background: #fff;box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);">
                    <a href="mobile.html">
                  <img src="products/i2.png" class="center-block">
                    <h4><center>Mobile <br></center></h4>
                    </a>

                    <br>

                    <a href="mobile.html" class="btn btn-primary">More...</a>

                </div>



<div class=" col-md-3" style="background: #fff;box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);">
                    <a href="ipad.html">
                  <img src="products/i1.jpg" class="center-block">
                    <h4><center>Ipad <br></center></h4>
                    </a>


                    <br>

                    <a href="ipad.html" class="btn btn-primary">More...</a>


                </div>

                 



                <div class=" col-md-3" style="background: #fff;box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);">
                    <a href="wash.html">
                  <img src="products/12.png" class="center-block">
                    <h4><center>Wash machine <br> </center></h4>
                    </a>

<br>

                    <a href="wash.html" class="btn btn-primary ">More...</a>

                </div>





                <div class=" col-md-3" style="background: #fff;box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);">
                    <a href="fridge.html">
                  <img src="products/16.png" class="center-block">
                    <h4><center>Toshiba Fridge <br> </center></h4>
                    </a>
<br>

                    <a href="fridge.html" class="btn btn-primary">More...</a>

                </div>


                <div class=" col-md-3" style="background: #fff;box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);">
                    <a href="vacuum.html">
                  <img src="products/2.png" class="center-block">
                    <h4><center>Cleaner <br> </center></h4>
                    </a>

<br>

                    <a href="vacuum.html" class="btn btn-primary">More...</a>

                </div>

  			


               

                <div class=" col-md-3" style="background: #fff;box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);">
                    <a href="plate.html">
                  <img src="products/i4.jpg" class="center-block">
                    <h4><center>Plate Wash machine <br></center></h4>
                    </a>

                    <br>

                    <a href="plate.html" class="btn btn-primary">More...</a>

                </div>
             
          </div>
             
          </div>


	

          
             
          </div>


 



    </section>
    <!-- Start section end -->


<section class="mw-abstract" id="why_mw">
   <div class="container">
       

 <div class="row">
        <div class="col-md-7 wow bounceInUp">
            <img src="images/why-mw.png" class="pull-left img-responsive">
        </div>

        <div class="col-md-5">
            <h3> <b>Contact us</b>  </h3>
            <p class="text-left" style="text-align:justify;">
           Call us : +9647501234567
           <br>
           our address : Erbil - Koya Road - opposite Blue center
           <br>
           Email : info@shoppingtechnology.com
            </p>

<br>

<form action="index.php" method="GET">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" name="Email">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" name="Name">Name</label>
      <input type="text"  name="name" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>

  <div class="form-group col-md-12">
    <label for="inputAddress2" name="Message">message</label>
    <textarea placeholder="Message"  name="message"></textarea>
  </div>


  <button type="submit" class="btn btn-primary">Send</button>
</form>






        </div>



    </div>


   </div>
</section>



<footer id="footer" style="background-color: #297DD7;">

<div class="container">
        <div class="row text-center">

            <div class="col-md-4"></div>
            <div class="col-md-4">

                <h4 class="footer-title">  Follow us on : </h4>
     <div class="iconfa">
     <a style="padding: 8px 16px;" href="https://www.facebook.com" target=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
     <a href="https://instagram.com/" target=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="https://www.snapchat.com/" target=""><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>
       <a href="https://twitter.com/" target=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
       </div>
    <p class="footer">
        all copyright reserved @ 2021
        
    </p>

    <br>
        </div>
                


            </div>
            <div class="col-md-4"></div>
    
     </div>


</footer>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <!-- Counter up -->
    <script src="js/counterup.min.js"></script>
    <!-- Typed -->
    <script src="js/typer.js"></script>
    <script src="js/main.js"></script>

    <script src="js/text-js.js"></script>
    <script>

    var typed3 = new Typed('#typed3', {
    strings: ['What We DO ?', 'What We <b>DO</b>?', ' Our Services '],
    typeSpeed: 30,
    backSpeed: 100,
    cursorChar: '',
    smartBackspace: false, // this is a default
    loop: false
  });


    </script>

    <script>
     
    $(document).ready(function($) {
      $("#owl-example").owlCarousel();
      $("#owl-example33").owlCarousel();
    });



    </script>



</body>

</html>
