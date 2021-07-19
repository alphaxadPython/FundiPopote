<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Fundi | Popote</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/all.css" rel="stylesheet" />

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h2 class="logo"><a href="#">Fundi Popote</a></h2>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="#" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    
                    <li>
                        <a class="getstarted scrollto" href="signup.php">Signup</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="hero" class="contact" style="background-image: url('assets/img/fund5.jpg');">
            <div class="container text-center" data-aos="fade-up">
               
                <div class="row">
                 <div class="card m-auto" style="max-width: 560px" >
                     <div class="card-body">
                      
                     <div class="row">
                        
                         <div class="col-md-6">
                             <img src="assets/img/funn.jpg" style="width: 100%; height: 230px" alt="">
                          </div>

                        <div class="col-md-6">
                            <h2>Login Please!!</h2>
                                        
                                <!-- login logic here -->
                                <?php

                                    include("connection.php");
        
                                    if(isset($_POST['login'])){
                                        $username = mysqli_real_escape_string($conn, $_POST['username']);
                                        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
                                        $sql = "SELECT * FROM member WHERE username ='$username' AND password ='$password'";
                                        $check = mysqli_query($conn, $sql);
        
                                        if(mysqli_num_rows($check) == 1){

                                            $_SESSION['username'] = $username;
                                            
                                            echo "
                                                <script>
                                                    window.location = 'home.php';
                                                </script>
                                            ";
                                        }else{
        
                                            ?>
                                            <div class="alert alert-danger" role="alert">
                                                <strong>No such account!!</strong>
                                            </div>
                                        <?php
                                        }
                                    }
                                ?>
                                <!-- end login logic -->
                                <form action="" method="POST" class="php-email-form">
                                        <div class="row">
                                            <div class="col-md-12 form-group mt-3">
                                                <input type="text" name="username" class="form-control" id="name" placeholder="Username" required />
                                            </div>
                                            <div class="col-md-12 form-group mt-3">
                                                <input type="password" class="form-control" name="password" id="email" placeholder="Password" required />
                                            </div>
                                        </div>
                                    
                                        <div class="text-center">
                                            <button type="submit" name="login">Login</button>
                                        </div>
                                    </form>
                                </div>

                        </div>

                     </div>
                 </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Fundi Popote</h3>
                        <p>
                            Kigamboni ferry <br /> Dar-es-salaam, Posta<br /> Tanzania <br /><br />
                            <strong>simu:</strong> +255 743 196 5599<br />
                            <strong>Email:</strong> fundipopote@gmail.com<br />
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Fuata Link</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="signup.php">Signup</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="login.php">Login</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="fundiSign.php">Fundi Signup</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Sheria zetu</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Sera Binafsi</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Huduma Zetu</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Mafundi Bomba</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Mafundi Ujenzi</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Mafundi Gari</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Huduma Zingine</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Utaalamu</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Subscribe Chama Chetu</h4>
                        <p>
                            Unaweza subscribe chama cha mafundi kwa kutuma email yako hapa!!
                        </p>
                        <form action="" method="post">
                            <input type="email" name="email" /><input type="submit" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">

                <div class="credits">
                    Designed by <a href="https://alphaxad.000webhostapp.com">Alpha Jozee</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i>
        </a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="assets/vendor/bootstrap/js/proper.js"></script>
        <script src="assets/vendor/bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>