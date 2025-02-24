<?php
session_start();
?>
<!-- PHP Code -->	
<?php
	if(isset($_POST['submit'])) {
	
		$u=$_POST['Uname'];
		$p=$_POST['Upass'];
		
		$servername='localhost';
		$username='root';
		$password='';
		$dbname='car_info';
	
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if($conn->connect_error){
			die("Connection Failed : " .$conn->connect_error);
		}

		$q="Select * From users where fname='$u' and password='$p' ";
			$result= $conn->query($q);
			if($result->num_rows > 0){
				$row=$result->fetch_assoc();
				session_start();
				$_SESSION['Uname']=$row['fname'];
				$_SESSION['Upass']=$row['password'];
							
				if($u=='admin'){
					$_SESSION['admin']=$row['fname'];
					$_SESSION['admin']=$row['password'];			
					header('location:admin/');
					
				}
				else{
					header('location:user/');
				}	
				
			}
	}		
	
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>LogIn | All Vehicle Inforamtion  </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

<style>
	input[type=text] {
    width: 40%;
    padding: 15px 22px;
    margin: 10px 5px;
    box-sizing: border-box;  
    color: white;
    border:1px solid yellow; 
}
input[type=password] {
    width: 40%;
    padding: 15px 22px;
    margin: 10px 5px;
    box-sizing: border-box;  
    color: white;
    border:1px solid yellow; 
}
label{
    
    color: white;
    font-size: 17px; 
}
input{
    
    color: white;
    font-size: 17px; 
}
textarea:focus, input:focus {
    color: white;
}
</style>

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
              <!--- <i class="fa fa-car" style="font-size: 40px"></i> <span class="logo-text" style="color: white;font-size: 40px">Car</span> Info.</span><br> --->
                 <img src="images/logo4.png" alt="Homepage"> 
				
            </a>
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Car Info</h3>
                
                <ul class="header-nav__list">
                  <!---  <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li> -->
					  <li><a href="index.html" title="about">About</a></li>
                    <li><a href="index.html" title="home">Home</a></li>
					  <li><a href="index.html" title="works">Works</a></li>
                    <li><a href="index.html" title="contact">Contact</a></li>
                    <li><a href="login.php" title="login">Login</a></li>
                    <li><a href="signup.php" title="signup">Sign-Up</a></li>
				
                </ul>
    
                <p></p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/header_back3.jpg" data-natural-width=2500 data-natural-height=1000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <form action="" method="Post" role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control w3-input w3-border w3-hover-gray" id="usrname" name="Uname" placeholder="Enter Name" required='required' style="color: white;"> <br>
               <label for="Password"><span class="glyphicon glyphicon-lock"></span> Password</label>
              <input type="password" class="form-control" id="Password" name="Upass" placeholder="Enter Password" required style="color: white;"> <br>
               <button type="submit" class="btn btn-primary" name='submit' ><span class="glyphicon glyphicon-off"></span> Login</button>
               <span class="new-registration"><a href="signup.php"> Create an Account </a></span><span>if you have n't alreday Registered. </span>
               </form>
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
			  <li><a href="index.html" title="about">About<span>who we are</span></a></li>
					  <li><a href="index.html" title="works">Our Models<span>what we do</span></a></li>
                    <li><a href="index.html" title="contact">Contact<span>get in touch</span></a></li>
            <li><a href="signup.php">Create New Account<span>Sign Up</span></a></li>
        </ul> <!-- end home-sidelinks -->

        <ul class="home-social">
            <li class="home-social-title">Follow Us</li>
            <li><a href="https://www.facebook.com/CARS-HOUSE-1182764345236628/?modal=admin_todo_tour">
                <i class="fab fa-facebook"></i>
                <span class="home-social-text">Facebook</span>
            </a></li>
            <li><a href="https://www.instagram.com/cine_shot_/">
                <i class="fab fa-instagram"></i>
                <span class="home-social-text">Instagram</span>
            </a></li>
         
        </ul> <!-- end home-social -->

      

    </section> <!-- end s-home -->




    </section> <!-- end s-contact -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">            
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>


	