<?
<!--include"connect.php";
if(isset($_POST['submit'])) {
  // Handle signup form submission
  // Your signup logic here...

  // Redirect to the login page after successful signup
  header("Location: LOGIN.php");
  exit(); // Ensure script execution stops after redirection
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title> signup </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

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
        <link href="css/BookAppointment.css" rel="stylesheet">
        <script src="js/BookAppointment.js" defer></script>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Nairobi</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+254794422351</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>Shuka@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-snapchat"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i><img src="img/logo.jpg" alt="Logo"></i>Shuka</h1>
                  
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        
                        <a href="about.html" class="nav-item nav-link">Home</a>
                        <a href="index.html" class="nav-item nav-link">Signup</a>
                        <a href="LOGIN.php" class="nav-item nav-link">Login</a>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="appointment.html" class="dropdown-item active">Appointment</a>
                                <a href="feature.html" class="dropdown-item">Hairstyles</a>
                                <a href="testimonial.html" class="dropdown-item">Reviews</a>
                               
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="BookAppointment.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" ="0.1s"><a href="BookAppointment.html"></a>Signup</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Appointment</li>
                </ol>    
            </div>
        </div>
        <!---start of form---->
        <div class="appointment-container">
            <h2>Signup</h2>
            <form action="signup.php" method="POST">
              <label for="name">Enter Username:</label>
              <input type="text" id="name" name="name" required>
          
              <label for="phone">Enter email:</label>
              <input type="email" id="email" name="email" required>

              <label for="password">Enter password:</label>
              <input type="password" id="password" name="password" required>

              <label for="confirmpassword">Confirm password:</label>
              <input type="password" id="cpass" name="confirmpassword" required>



              <button type="submit">Submit</button>
            </form>
        </div>
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    
                    <div class="col-md-6 text-center text-md-end text-white">
                        
                        <a class="border-bottom" href="https://github.com/anastacia254/Shukaweb">Shuka founders</a> 
                    </div>
                </div>
            </div>
        </div>
       

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        
        <script src="js/main.js"></script>
        
    </body>

</html>