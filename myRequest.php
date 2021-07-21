<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Maombi | Fundi Popote</title>
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
            <h2 class="logo"><a href="home.php">Fundi Popote</a></h2>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="home.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a class="nav-link scrollto" href="cartegory.php"><i class="fa fa-cog" aria-hidden="true"></i> Huduma</a></li>
                    <li class="dropdown">
                        <a href="#"><span><i class="fa fa-user-md" aria-hidden="true"></i> Mafundi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="mafundiCartegory.php?cartegory=<?php echo"Bomba";?>">Fundi Bomba</a></li>
                            <li><a href="mafundiCartegory.php?cartegory=<?php echo"Gari";?>">Fundi Gari</a></li>
                            <li><a href="mafundiCartegory.php?cartegory=<?php echo"Umeme";?>">Fundi Umeme</a></li>
                            <li><a href="mafundiCartegory.php?cartegory=<?php echo"Simu";?>">Fundi Simu</a></li>
                            <li><a href="mafundiCartegory.php?cartegory=<?php echo"Funguo";?>">Fundi Funguo</a></li>
                            <!-- at small devices -->
                            <li><a class="d-md-none" href="mafundiCartegory.php?cartegory=<?php echo"Dish";?>">Fundi Dish</a></li>
                            <li><a class="d-md-none" href="mafundiCartegory.php?cartegory=<?php echo"Nguo";?>">Fundi Nguo</a></li>
                            <li><a class="d-md-none" href="mafundiCartegory.php?cartegory=<?php echo"Ujenzi";?>">Fundi Ujenzi</a></li>
                            <li><a class="d-md-none" href="mafundiCartegory.php?cartegory=<?php echo"Taa";?>">Fundi Taa</a></li>
                            <li><a class="d-md-none" href="mafundiCartegory.php?cartegory=<?php echo"Camera";?>">Fundi Camera</a></li>
                            <li><a class="d-md-none" href="mafundiCartegory.php?cartegory=<?php echo"Computer";?>">Fundi Computer</a></li>
                            <li><a href="cartegory.php">Tazama Wote</a></li>

                        </ul>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="active"><span><i class="fa fa-lock" aria-hidden="true"></i> Account</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="myRequest.php">Maombi</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Badili Taarifa</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="getstarted scrollto" href="index.php?id=1">Logout</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

     <!-- ======= Hero Section ======= -->
     <section id="hero" class="d-flex align-items-center" style="background-image: url('assets/img/repair.jpg');">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="90">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Mafundi Ulioita</h1>
                    <h2>Orodha Ya mafundi Uliowahi Ita </h2>
                </div>
            </div>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

            <?php 
                  include "connection.php";

                  $username = $_SESSION['username'];

                $sql = "SELECT * FROM member JOIN request ON member.username = request.username WHERE request.username = '$username'";
                $check = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($check)){

            ?>
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">
                    
                    <div class="row">

                        <div class="card m-auto" style="max-width: 600px" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo ucwords($row['img']); ?>" style="height: 225px;" class="img-fluid" alt="" />
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="text-center" style="color: #16507b"><?php echo ucwords($row['fundi']); ?></h4>

                                        <div class="row mt-3">

                                            <div class="col-6">
                                                <span>Ratings:</span><br>
                                                <span class="text-muted"><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning" ></i><i class="fas fa-star-half-alt text-warning"></i><i class="fas fa-star-half text-warning" ></i></span> <br>
                                        
                                            </div>
                                            <div class="col-6">
                                                <span>Location:</span><br>
                                                <span class="text-muted"><i class="fas fa-hand-point-right" ></i> <?php echo ucwords($row['region']); ?></span> <br>
                                            
                                            </div>
                                        </div>
                                        <br>
                                         <span>Taaluma:</span><br>
                                         <span class="text-muted"><i class="fas fa-hand-point-right" ></i> Fundi <?php echo ucwords($row['cartegory']); ?></span> <br>
                                          <br>
                                        <div class="row">
                                                
                                                <div class="col-6 m-auto">
                                                    <a href="deleteRequest.php?id=<?php echo $row['id']; ?>" class="btn btn-danger w-75">Sitisha</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <?php } ?>
            <!-- End Team Section -->

    </main>
    <!-- End #main -->


    <!-- {% comment %} <div id="preloader"></div> {% endcomment %} -->

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
                                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Login</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Signup</a>
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
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i
    ></a>

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