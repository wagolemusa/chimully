<!DOCTYPE html>
<html lang="en">
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(0.1000,34.7500),
    zoom:8,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chimuly Investment</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="images/Logo.png" width="80" height="60">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="ok">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                 <li>
                        <li> <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="service.php">About Us</a>
                    </li>
                    <li>
                    
                        <a href="operation.php">Operation</a>
                    </li>
                     <li>
                        <a href="about.php">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
                  </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
               <p class="lead">OPERATIONS TEAM MAJOR TASKS </p>
                <div class="list-group">
                    <a href="#" class="list-group-item">MALL CLEANING</a><br/>
                    <a href="#" class="list-group-item">GARBAGE PRECAUTIONS </a><br/>
                    <a href="#" class="list-group-item">PLUMBING</a><br/>
                    <a href="#" class="list-group-item">INTERNAL WALLS CLENING</a><br/>
                    <a href="#" class="list-group-item">TOILET/WASHROOMS </a><br/>
                     <a href="#" class="list-group-item">PEST CONTROL AND FUMIGATION  </a><br/>
                      <a href="#" class="list-group-item">CERAMIC FLOOR AND OUTSIDE  </a><br/>
                       <a href="#" class="list-group-item">CLEANING OF CARPETS  </a><br/>
               <a href="#" class="list-group-item">CORRIDORS  </a><br/>
              
                    <a href="#" class="list-group-item">FURNITURE AND FITTINGS </a>
                </div>
            </div>

         <div id="googleMap" style="width:850px;height:380px;"></div>


	  <table background="images/blac.jpg" width="850">
<tr>
	<td>
				<div class="mok">
                  Contact Us<br/>
                    
                    CHIMULY INVESTMENT.
                    
                </div>
           
              <br/>
              <br/>
	  <div class="me">
              <div class="body">
			<div class="sidebar">
            
				<div>
                Call: +254 771 225 011	 <br/>
                Email:Homiemusa@gmail.com<br/>
                Social media				

                        <br/>
					<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="http://freewebsitetemplates.com/go/facebook/" id="fb">fb</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a>

                </div>

            </div>

        </div>

    </div>
                
    </div>
         <br/>
          <br/>
           <br/> 
            
		<form class="form-horizontal" action="insert1.php" method="post">
                              
                
                           <br/>
                      <input type="text" name="name"class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." height="35">
                               <br/>
                      <input type="email" name="email"class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                   
                                <br/>
                                
                      <input type="text" name="phone" class="form-control" placeholder="Your Phone *" id="phone"  required data-validation-required-message="Plzease enter your phone number.">
                           
                            
                                <br/>
                                    <input type="text" name="message"textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                
                             <br/>
                           
                            
                                <button input type="submit" name="submit" value="send message" class="btn btn-xl" style="color:#00F">Send Message</button>
                                
                                		
                <input type="reset" name="reset" value="reset"/>
                         
                    </form>
                  
     
      </table>
</tr>
	</td>
    

<!-- /.container -->

    
 </div>
  </div>
   
     

        <!-- Footer -->
         <footer>
        <div class="container">
            <div class="row">
               
         
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">chimuly</a>
                        </li>
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">About us</a>
                        </li>
                         <li><a href="#">Operation</a>
                        </li>
                        <li><a href="#">Services</a>
                        </li>
                        <li><a href="#">Contact us</a>
                        </li>
                         <li><a href="#">Mail</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
