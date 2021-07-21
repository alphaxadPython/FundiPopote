<?php

    session_start();

    if(!isset($_SESSION['username'])){
        ?>
        <script>
            window.location = 'index.php';
        </script>
        <?php
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Karibu - Fundi | Popote</title>
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
                    <li><a class="nav-link scrollto active" href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
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
                        <a href="#"><span><i class="fa fa-lock" aria-hidden="true"></i> Account</span> <i class="bi bi-chevron-down"></i></a>
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
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="90">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Fundi Popote</h1>
                    <h2>Jipatie Fundi wa Tatizo lako popote pale ulipo </h2>
                </div>
            </div>
            <div class="text-center">
                <a href="#services" class="btn-get-started scrollto"><i class="fa fa-search" aria-hidden="true"></i> Tafuta Fundi</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Huduma Zetu</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <a href="mafundiCartegory.php?cartegory=<?php echo"Bomba";?>">
                        <div class="icon-box iconbox-blue">
                                    <div class="icon">
                                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                            stroke="none"
                                            stroke-width="0"
                                            fill="#f5f5f5"
                                            d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"
                                            ></path>
                                        </svg>
                                        <!-- <i class="bx bxl-"></i> -->
                                        <i class="fas fa-faucet"></i>
                                    </div>
                                    <h4><a href="mafundiCartegory.php?cartegory=<?php echo"Bomba";?>">Fundi Bomba</a></h4>
                                <p>
                                    Tunao mafundi bomba wenye uzoefu na kazi... kwa gharama ndogo kabisa
                                </p>
                        </div>
                    </a>
                </div>

               <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <a href="mafundiCartegory.php?cartegory=<?php echo"Umeme";?>">

                    <div class="icon-box iconbox-orange">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path
                                stroke="none"
                                stroke-width="0"
                                fill="#f5f5f5"
                                d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"
                                ></path>
                            </svg>
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4><a href="mafundiCartegory.php?cartegory=<?php echo"Umeme";?>">Fundi Umeme</a></h4>
                        <p>
                            Tunao mafundi umeme wenye uzoefu na kazi... kwa gharama ndogo kabisa
                        </p>
                    </div>
                   </a>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <a href="mafundiCartegory.php?cartegory=<?php echo"Gari";?>">

                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    stroke="none"
                                    stroke-width="0"
                                    fill="#f5f5f5"
                                    d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"
                                    ></path>
                                </svg>
                                <i class="fas fa-car-crash"></i>
                            </div>
                            <h4><a href="mafundiCartegory.php?cartegory=<?php echo"Gari";?>">Fundi Gari</a></h4>
                            <p>
                                Tunao mafundi Gari wenye uzoefu na kazi... kwa gharama ndogo kabisa
                            </p>
                        </div>
                          
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <a href="mafundiCartegory.php?cartegory=<?php echo"Rangi";?>">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    stroke="none"
                                    stroke-width="0"
                                    fill="#f5f5f5"
                                    d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"
                                    ></path>
                                </svg>
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h4><a href="mafundiCartegory.php?cartegory=<?php echo"Rangi";?>">Fundi Rangi</a></h4>
                            <p>
                                Tunao mafundi Rangi wenye uzoefu na kazi... kwa gharama ndogo kabisa
                            </p>
                        </div>
                    </a>  
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <a href="mafundiCartegory.php?cartegory=<?php echo"TV"; ?>">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    stroke="none"
                                    stroke-width="0"
                                    fill="#f5f5f5"
                                    d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"
                                    ></path>
                                </svg>
                                <i class="bx bx-slideshow"></i>
                            </div>
                            <h4><a href="mafundiCartegory.php?cartegory=<?php echo"TV";?>">Fundi TV</a></h4>
                            <p>
                                Tunao mafundi TV wenye uzoefu na kazi... kwa gharama ndogo kabisa
                            </p>
                        </div>
                    </a>    
                </div>
  
               <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                <a href="mafundiCartegory.php?cartegory=<?php echo"Simu";?>">

                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path
                                stroke="none"
                                stroke-width="0"
                                fill="#f5f5f5"
                                d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"
                                ></path>
                            </svg>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <h4><a href="mafundiCartegory.php?cartegory=<?php echo"Simu";?>">Fundi Simu</a></h4>
                        <p>
                            Tunao mafundi Simu wenye uzoefu na kazi... kwa gharama ndogo kabisa
                        </p>
                    </div>
               </a>   
            </div>

            
            </div>
        </div>
    </section>
    <!-- End Sevices Section -->
  
    <main id="main">

        <!-- eneo ulilopoa -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Eneo Uliopo</h2>
                    <p>
                        Raman chini hapo inaonyesha eneo uliopo hivi sasa ... na itakusaidia kupata mafundi wa aina yeyote waliopo karibu yako popote pale utakapo kwenda!!
                    </p>
                </div>

                <div>

                    <iframe style="border: 0; width: 100%; height: 270px" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15846.426517470116!2d39.289474247774095!3d-6.817605492322688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sposta%20dar%20es%20salaam%20google%20map!5e0!3m2!1ssw!2stz!4v1625297249688!5m2!1ssw!2stz"
                        frameborder="0" allowfullscreen></iframe>
                </div>

            </div>
        </section>

        <!-- ======= Mafundi karibu yako======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Mafundi Eneo Lako:</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/phone2.jpg" style="height: 240px;" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="fundiCard.php?id=165"><i class="fas fa-id-card"></i> Taarifa</a>

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Alpha Jozee</h4>
                                <span>Fundi Computer - Kigambooni</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/fundi3.jpg" style="height: 240px;" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="fundiCard.php?id=166"><i class="fas fa-id-card"></i> Taarifa</a>
                                   

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Philemon Philbert</h4>
                                <span>Fundi Gari - Kigambooni</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/coo.jpg" style="height: 240px;" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="fundiCard.php?id=167 "><i class="fas fa-id-card"></i> Taarifa</a>
                                   

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ramadan Bakari</h4>
                                <span>Fundi Rangi - Kigambooni</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/fundi1.jpg" style="height: 240px;" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="fundiCard.php?id=168"><i class="fas fa-id-card"></i> Taarifa</a>
                                   

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Nyakasala Wise</h4>
                                <span>Fundi Gari - Kigambooni</span>
                            </div>
                        </div>
                    </div>
                   

                  
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
                        Je Umepatwa na tatizo la kiufundi ?
                    </p>
                    <a class="cta-btn" href="cartegory.php">Tafuta Fundi Hapa</a>
                </div>
            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Wasiliana Nasi</h2>
                    <p>
                        Kwa Shida yeyote, taarifa yeyote, lawama yeyote au dharula yeyote wasiliana nasi hapo chini kwa msaada wa haraka.. tupo karibu yako!!
                    </p>
                </div>


                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Dar-es-Salaam, Posta IFM</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>fundipopote@.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Simu:</h4>
                                <p>+255 743 196 599</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Jina lako" required />
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Yako" required />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Ujumbe" required />
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Asante sana Ujumbe wako umepokelewa!!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Tuma Ujumbe</button>
                            </div>
                        </form>
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