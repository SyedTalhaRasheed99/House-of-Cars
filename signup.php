<?php
    if(isset($_POST['submit'])) {

    $fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $em = $_POST['email'];
    $pas = $_POST['password'];
    $phone = $_POST['phone'];


    $servername='localhost';
    $username='root';
    $password='';
    $dbname='car_info';
        
        $conn = new mysqli($servername, $username, $password, $dbname);     
            if($conn->connect_error)
            {
                die("Connection Failed : " .$conn->connect_error);
            }
        $q="Insert into users (fname,lname,password,email,phone) VALUES('$fn','$ln','$pas','$em',$phone)";
        
            if($conn->query($q)==True){
                
                echo
                    "<p style='background-color:#5eb762;width:30%;height:5%;margin-left:2%;margin-top:2%;'><b>You have Successfuly Registered</b></p>";
            }
            else{
                echo "<p style='background-color:#ff4242;width:30%;height:5%;margin-left:2%;margin-top:2%;'><b>OOPS! Try Again</b></p>";
                echo "Error: " . $q . "<br>" . $conn->error;
            }

        }

?>
<!DOCTYPE html>
<html lang="en">
  <head>

<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    color:black;
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    color:black;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}

.error{

width: 50%;
margin: 0px auto;
padding: 10px;
border: 1px solid #a94442;
color:#a94442;
background: #f2dede;
border-radius: 5px;
text-align: center;

}
</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up | Car Information</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min1.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min1.css">
	<link rel="stylesheet" href="css/animate1.css">
	<link href="css/prettyPhoto1.css" rel="stylesheet">
	<link href="css/style1.css" rel="stylesheet" />	
   
  </head>
  <body>

<form action="" method="post">

    

  <div class="container">
  	
    
    <h2> <center>Please fill in this form to create an account. </center></h2>
   
    <hr>


    <label style="color:black;"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label style="color:black;"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <label style="color:black;"><b>Email </b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label style="color:black;"><b>Password </b></label>
    <input type="password" placeholder=" Password" name="password" required>
    <label style="color:black;"><b>Phone </b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" required>



    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="submit" class="registerbtn">Register</button>
    
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Log in</a>.</p>
  </div>
</form>

	<br>




	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min1.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min1.js"></script>
	<script src="js/jquery.prettyPhoto1.js"></script>
    <script src="js/jquery.isotope.min1.js"></script>  
	<script src="js/wow.min1.js"></script>
	<script src="js/functions1.js"></script>
	
  </body>
</html>


