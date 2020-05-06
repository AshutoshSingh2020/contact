<?php
 $conn = mysqli_connect("localhost","root", "", "hellowmobile");
 if(!$conn)
 {
  die("Connection failed");
 }
 session_start();
 error_reporting(0);
 $firstname =$_REQUEST['firstname']; 
 $lastname = $_REQUEST['lastname'];
 $mail = $_REQUEST['mail'];
 $feed = $_REQUEST['feedback'];

 $sql ="INSERT INTO `contact`(`First Name`, `Last Name`, `Email  Address`, `Feedback`) VALUES ('$firstname','$lastname','$mail','$feed')";

if(mysqli_query($conn, $sql))
{
  if($_POST['submit'])
  {
  }
}
    $to = "$mail";
    $subject = "Contact Custumer";
    $message = "Hi,
                   Custumer FirstName = $firstname
                   Custumer Lastname = $lastname
                   Reason = $feed ,
                    This Custumer want to contact you,
                    if may possible then please reply
                    as soon as.";
    $headers = "From: businessashu1112001@gmail.com";
    if(mail($to, $subject, $message, $headers))
    {
      //echo "sucess";
    }
     $to = "$mail";
     $subject = "Company Name";
     $message = "Hi,
                 Thanks for contact us,
                 we will be reply as soon as possible.
                Company Name                Authorised By";
    $headers = "From: businessashu1112001@gmail.com";
    if(mail($to, $subject, $message, $headers))
    {
     // echo "Mail send success";
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
a:hover{
 		font-size: 20px;
 	}
 	.h5h:hover{
 		font-size: 20px
 	}
 	a:active{
 		color: lightgreen;
 	}
    </style>
    <title>Contact Us</title>
  </head>
  <body style="background-color: #E0F1F7;margin:0%;position:absolute;">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
            <a class="navbar-brand" href="index.html">AK Mishra Style</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Login.html"><span class="glyphicon glyphicon-user"></span> Account</a></li>
            <li><a href="aboutus.html" target="#"><span class="glyphicon glyphicon-tasks"></span>About Us</a></li>
            <li><a href="contact.html" target="#"><span class="glyphicon glyphicon-phone"></span>Contact Us </a></li>
          </ul>
          <center>
            <form class="form-inline my-2 my-lg-0" style="padding-top:9px" method="post">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </center>
        </div>
      </div>
    </nav>
    <div class="row" style="padding-top:50px" >
      <div class="col"style="float: left;padding-left:50px;padding-right:50px" >
        <p><u><h4>Our Official Location</h4></u></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d1449.2268161288714!2d82.728089!3d26.788386!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d26.78868!2d82.72731999999999!5e1!3m2!1sen!2sin!4v1585139334741!5m2!1sen!2sin" width="400" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="col " style="float: left;padding-left:25px">
          <h4><center><p><u>Get in Touch</u></p></center></h4>
            <form method="post" style="margin-right: 10px;border:solid;border-radius:16px;border-color: green;padding:10px;">
              <p>Please fill out the quick form and we will be in touch in lightening speed.</p>
                <div class="form-row">
                  <div class="col">
                    <label for="firstname">Frist Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
                  </div>
                  <div class="col">
                    <label for="secondname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email address</label>
                  <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description/Feedback</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="feedback" rows="3"></textarea>
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-2" name="submit" id="submit" value="submit">Submit</button>
                </div>
            </form>
      </div>
      <div class="col" style="float: left;padding-left:20px;">
        <h3><p>Contact with us:</p></h3>
        <h5><p>For support or any questions:<br>Email us at&nbsp&nbsp<a href="mailto:mishraabhi8924@gmail.com" target="#">support@akm.com</a></p></h5>
        <h4><p> Feel free to contact for any <br>queries related to our services:</p></h4>
        <h5 class="h5h"><i style='font-size:24px' class="fab">  &#xf40c;</i>&nbsp&nbsp8874036548</h5>
        <h5 class="h5h"><i style='font-size:24px' class='fas'>&#xf0e0;</i>&nbsp&nbspmishraabhi8924@gmail.com</h5>
        <h5><i style='font-size:24px' class='fab'>&#xf082;</i>&nbsp&nbsp<a href="https://www.facebook.com/profile.php?id=100037461855000" target="#">Facebook support</a></h5>
        <h5><i style='font-size:24px' class='fab'>&#xf092;</i>&nbsp&nbsp<a href="https://github.com/Abhishekmishra-17" target="#">Github support</a></h5>
        <h5><i style='font-size:24px' class='fab'>&#xf16d;</i>&nbsp&nbsp<a href="#" target="#">insta</a></h5>
        <h5><i style='font-size:24px' class='fab'>&#xf08c;</i>&nbsp&nbsp<a href="https://www.linkedin.com/in/abhishek-mishra-377055193" target="#">Linkedin support</a></h5>
        <h5><i style='font-size:24px' class='fa'>&#xf167;</i>&nbsp&nbsp<a href="#" target="#">Youtube support</a></h5>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>