<?php
  include 'connect.php';
  $success = 0;
  $unsuccess = 0;
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email =$_POST['email'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM shuka WHERE email='$email'";
    $result = mysqli_query($conn, $sql);//checks connection to database
if ($result) {
  if (mysqli_num_rows($result)>0) {// checks if that record exists >1 means the record exists
      // check if password match
    //get password hash from db
    $shuka = mysqli_fetch_assoc($result);
    $_databpassword= $shuka['password'];
    //password_verify ()-compares the hash password with the password the user has inputed
    if($_databpassword == $password) {
     // echo"Login successful";
      //sessions-to store user data(in variables) across multiple pages
      session_start();//start user session
      $_SESSION['email']=$email;
      $_SESSION['id']=$shuka['id'];
      header("Location: about.html");
      exit();
    } else{
     // echo"Invalid login";
      $unsuccess=1;
        }
        
     }
  }
}
?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="LOGIN.CSS">


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">



</head>
<body>

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i ><img src="img/logo.jpg" alt="Logo"></i>Shuka</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="about.html" class="nav-item nav-link">Home</a>
                        <a href="index.php" class="nav-item nav-link">Signup</a>
                        <a href="LOGIN.php" class="nav-item nav-link">Login</a>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="appointment.html" class="dropdown-item">Appointment</a>
                                <a href="feature.html" class="dropdown-item">Hairstyles</a>
                                
                                <a href="testimonial.html" class="dropdown-item">Reviews</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link active">Contact Us</a>
                    </div>
                    <a href="BookAppointment.html" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->





  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <div class="text">
                    <p> SHUKA! <i>  Discover your perfect hairstyle with us  </i></p>
                </div>     
                <!-------------      image     ------------->
                
                
            </div>
            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header>Log into account</header>
                   <form action="LOGIN.php" method="POST" target="about.html">
                   <div class="input-field">
                        <input type="text" class="input" id="email"name="email" required="" autocomplete="off">
                        <label for="email">Email</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" id="pass" name="password" required="">
                        <label for="pass">Password</label>
                    </div> 
                   <div class="input-field">
                        
                        <input type="submit" class="submit" value="Login">
                   </div> 
</form>
                   <div class="signup">
                   <span>Don't have an account? <a href="index.php">Sign up here</a></span>
                   </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>