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
    
    
        

        $s = "insert into customer ( CustomerName , Phone, Email,Address)  values ( '$_GET[CustomerName]' , '$_GET[Phone]' , '$_GET[Email]','$_GET[Address]')";
    
    if(!(mysqli_query($con , $s)))
        echo "not add :" . mysqli_error($con);	
    
    mysqli_close($con);
?>

    <nav id="navigation" class="navbar no-scrolled">
        <div class="container cat-nav">
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
      
            

        </div>
    </header>
    <!-- Header end-->
<div style="height: 80px;"></div>

    <!-- Start section -->
    <section class="mw-abstract2">
        <div class="padding-masc">
            <div class="container">

<form action="Index.php" method="GET">
    <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4" name="customer">Customer Name</label>
          <input type="text" name="CustomerName" class="form-control"  placeholder="Customer Name">
        </div>
        <div class="form-group col-md-12">
          <label for="inputPassword4" name="Phone">Phone Number</label>
          <input type="number"  name="Phone" class="form-control" id="inputPassword4" placeholder="Phone Number">
        </div>
      </div>
    
      <div class="form-group col-md-12">
        <label for="inputAddress2" name="Email">Email</label>
        <input type="email"  name="Email" class="form-control" id="inputPassword4" placeholder="Email Address">
      </div>
     
      <div class="form-group col-md-12">
        <label for="inputAddress2" name="address">Address</label>
        <input type="text"  name="Address" class="form-control" id="inputPassword4" placeholder="Address">
      </div>
    
      <button type="submit" class="btn btn-primary">Send</button>
</form>
<br>

            </div>
        </div>

      <div class="row">
            

          
        

         

             
          </div>
             
          </div>


	

          
             
          </div>


 



    </section>
    <!-- Start section end -->






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
