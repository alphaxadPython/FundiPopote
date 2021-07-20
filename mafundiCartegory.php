<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Fundi Popote</title>
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
                    <li><a class="nav-link scrollto" href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a class="nav-link scrollto" href="cartegory.php"><i class="fa fa-cog" aria-hidden="true"></i> Huduma</a></li>
                    <li class="dropdown">
                        <a href="#" class="active"><span><i class="fa fa-user-md" aria-hidden="true"></i> Mafundi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="mafundiCartegory.php">Fundi Bomba</a></li>
                            <li><a href="#">Fundi Gari</a></li>
                            <li><a href="#">Fundi Umeme</a></li>
                            <li><a href="#">Fundi Simu</a></li>
                            <li><a href="#">Fundi Funguo</a></li>
                            <li><a href="cartegory.php">Tazama Wote</a></li>

                        </ul>
                    </li>
                     <li class="dropdown">
                        <a href="#"><span><i class="fa fa-lock" aria-hidden="true"></i> Account</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="myRequest.php">Maombi</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Notification</a></li>
                            <li><a href="#">Badili Taarifa</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="getstarted scrollto" href="index.php">Logout</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <?php
             $cartegory = $_GET['cartegory'];
    ?>
        <section id="hero" class="d-flex align-items-center" style="background-image: url('assets/img/<?php echo $cartegory;?>.jpg');">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 text-center">
                        
                        <h1>Mafundi <?php  echo $cartegory;?></h1>
                        <p>Haribu <?php  echo $cartegory;?> Tukutengenezee!!</p>
                    </div>
                </div>
            
            </div>
        </section>
    <?php ?>
    <!-- End Hero -->

    <main id="main">
       <!-- ======= Mafundi karibu yako======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <?php
                          $cartegory = $_GET['cartegory'];
                          include "connection.php";

                          $sql = "SELECT * FROM  member  WHERE member.cartegory ='$cartegory'";
                          $check = mysqli_query($conn, $sql);

                          while($row = mysqli_fetch_assoc($check)){

                        ?>
                         <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="<?php echo $row['img']; ?>" style="height: 240px; width: 300px;" class="img-fluid" alt="" />
                                        <div class="social">
                                            <a href="fundiCard.php?id=<?php echo $row['id']; ?>"><i class="fas fa-id-card"></i> Taarifa</a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4><?php echo ucwords($row['username']); ?></h4>
                                        <span>Fundi <?php echo ucwords($row['cartegory']); ?> - <?php echo ucwords($row['region']); ?></span>
                                    </div>
                                </div>
                            </div>

                    <?php } ?>
                
                  
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">

                    <h3>Tupo Karibu Yako!</h3>

                    <form action="" method="post">

                    </form>
                    <p>
                        Je Umepatwa na tatizo la <?php echo $_GET['cartegory']; ?> ?
                    </p>
                    <a class="cta-btn" href="#">Tafuta Fundi Hapa</a>
                </div>
            </div>
        </section>
        <!-- End Cta Section -->

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
                                <i class="bx bx-chevron-right"></i> <a href="home.php">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="cartegory.php">Huduma</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="profile.php">Account</a>
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
                            <input type="email" name="email" required/><input type="submit" value="Subscribe" />
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