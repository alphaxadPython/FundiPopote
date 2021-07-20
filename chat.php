<?php session_start(); ?>
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
    <link href="assets/css/chat.css" rel="stylesheet" />


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
                    <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="cartegory.php">Huduma</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Mafundi</span> <i class="bi bi-chevron-down"></i
              ></a>
                        <ul>
                            <li><a href="mafundiCartegory.php">Fundi Bomba</a></li>
                            <li><a href="#">Fundi Gari</a></li>
                            <li><a href="#">Fundi Umeme</a></li>
                            <li><a href="#">Fundi Simu</a></li>
                            <li><a href="#">Fundi Funguo</a></li>
                            <li><a href="cartegory.php">Tazama Wote</a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="myRequest.php">Maombi</a></li>
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

    <main id="main">

         <?php 

            $id = $_GET['id'];

            include('connection.php');

            $sql = "SELECT * FROM member WHERE id ='$id'";
            $check = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($check)){
                $_SESSION['reciver'] = $row['username'];

        ?>
                <section id="team" class="team section-bg">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Chat na Fundi</h2>
                            <p><?php echo ucwords($row['username']); ?> Fundi <?php echo ucwords($row['cartegory']); ?> - <?php echo ucwords($row['region']); ?></p>

                        </div>

                        <div class="row">
                
                            <div class="card m-auto" style="max-width: 800px" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?php echo $row['img']?>" style="height: 250px;" class="img-fluid" alt="" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mesgs">
                                                <div class="msg_history">
                                            <hr>

                
                                                <?php

                                                    include "connection.php";
                                                    $user = $_SESSION['username'];
                                                    $recv = $_SESSION['reciver'];

                                                    $sql = "SELECT * FROM chat WHERE sender ='$user' AND reciver ='$recv'";
                                                    $check = mysqli_query($conn, $sql);

                                                    while($row = mysqli_fetch_assoc($check)){
                                                        
                                                    ?>
                                                    <div class="outgoing_msg">
                
                                                        <div class="sent_msg">
                                                            <p><?php echo $row['msg'] ?>
                                                            </p>
                                                            <small class="time_date"> <?php echo $row['time'] ?></small> 
                                                        </div>
                                                    </div>
                                                    <?php } ?>

                                                    <div class="incoming_msg">
                                                        <div class="incoming_msg_img"> <img src="<?php echo $row['img']?>" style="border-radius: 50%; width: 100%; width: 30px; height: 30px;" > </div>
                                                        <div class="received_msg">
                                                            <div class="received_withd_msg">
                                                                <p>Acha mambo yako ...pambana!!
                                                                </p>
                                                                <small class="time_date"> 11:01 AM    |    June 9</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="type_msg">
                                                    <div class="input_msg_write">
                                                       <form action="" method="post">
                                                          <input type="text" name="text" class="form-control text-primary" placeholder="Type a message" />
                                                             <button class="msg_send_btn" type="submit" name="chat"><i class="fab fa-telegram" ></i></button>
                                                       </form>
                                                    </div>
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
        <?php
            include "connection.php";

            $username = $_SESSION['username'];
            $recive = $_SESSION['reciver'];



            if(isset($_POST['chat'])){
                $msg = mysqli_real_escape_string($conn, $_POST['text']);

                $sql = "INSERT INTO `chat`(`sender`, `reciver`, `msg`) VALUES ('$username','$recive','$msg')";
                mysqli_query($conn, $sql);

            }
        ?>
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