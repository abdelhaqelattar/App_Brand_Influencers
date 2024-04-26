<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= APP_URL ?>/css/all.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/css/front/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>About</title>
</head>

<body>
    <?php
    $page = "about";
    include "header.php"
    ?>


    <main>
        <section class="page">
            <div class="container">
                <h2 class="section-title">About</h2>
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar</p>
            </div>
        </section>
        <section class="story">
            <div class="container">
                <h2 class="section-title">We Have Been Established Since 2009 With A Lot Of Experience</h2>
                 <!-- we use d-flex flex-wrap to make the divs in the same line and flex-wrap to make them wrap when the screen is small -->
                 <!-- we use col-12 col-lg-6 to make the divs take 12 columns in small screens and 6 columns in large screens -->
                 <!-- we use gap-4 to make a gap between the divs -->
                 <!-- d-flex to make the div that contain the image and the div that contain the paragraph and the list in the same line -->
                <div class="d-flex flex-wrap">
                    <div class="col-12 col-lg-6">
                        <img src="<?= APP_URL ?>/assets/images/story_image.png" alt="">
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada. Suspendisse faucibus interdum</p>
                        <ul>
                            <li class="d-flex gap-4 align-center">
                                <i class="fa-solid fa-circle-check background3"></i>
                                <div>
                                    <h3>Business Growth</h3>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </li>
                            <li class="d-flex gap-4 align-center">
                                <i class="fa-solid fa-circle-check background3"></i>
                                <div>
                                    <h3>Social Media Promotions</h3>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </li>
                            <li class="d-flex gap-4 align-center">
                                <i class="fa-solid fa-circle-check background3"></i>
                                <div>
                                    <h3>Higher Customer Satisfaction</h3>
                                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </li>
                        </ul>
                        <p class="text-secondary my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="btn btn-primary d-inline-block">About Us <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="statistics">
            <div class="container d-flex flex-wrap">
                <div class="col-12 col-lg-6">
                    <h2 class="section-title mt-0">Excellent Service And Unforgettable Experiences</h2>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar sapien</p>
                    <div class="stats">
                        <div class="stats-item">
                            <div class="d-flex space-between align-center">
                                <h3 class="title">Successfull Campaign</h3>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="stats-item">
                            <div class="d-flex space-between align-center">
                                <h3 class="title">Professional Influencer</h3>
                                <span>92%</span>
                            </div>
                            <div class="progress">
                                <div style="width: 92%;"></div>
                            </div>
                        </div>
                        <div class="stats-item">
                            <div class="d-flex space-between align-center">
                                <h3 class="title">Satisfying Customers</h3>
                                <span>97%</span>
                            </div>
                            <div class="progress">
                                <div style="width: 97%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-5 ">
                    <q class="text-secondary">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia</q>
                    <div class="p-relative second">
                        <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Photo-Man.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="team">
            <div class="container">
                <div class="title-center">
                    <h2 class="section-title mb-2">What Will We Give You?</h2>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
                <div class="grid">
                    <!-- we use col-12 col-sm-6 col-md-4 to make the divs take 12 columns in small screens and 6 columns in medium screens and 4 columns in large screens -->
                    <!-- we use ici some images with style css like gride-card and info and other style ,we define them in the home.css file ,all.ccs and component.css -->
                    
                    <div class="grid-card col-12 col-sm-6 col-md-4">
                        <img src="<?=APP_URL?>/assets/images/Abdelhaq_El_Attar.jpeg" alt="">
                        <div class="info">
                            <h2>Abdelhaq El Attar</h2>
                            <h4>Manager</h4>
                        </div>
                    </div>
                    <div class="grid-card col-12 col-sm-6 col-md-4">
                        <img src="<?=APP_URL?>/assets/images/Abdelhaq_El_Attar.jpeg" alt="">
                        <div class="info">
                            <h2>Ilyass El Attar</h2>
                            <h4>directeur</h4>
                        </div>
                    </div>
                    <div class="grid-card col-12 col-sm-6 col-md-4">
                        <img src="<?=APP_URL?>/assets/images/Abdelhaq_El_Attar.jpeg" alt="">
                        <div class="info">
                            <h2>Mohamed El Attar</h2>
                            <h4>directeur</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- we use include to include the footer.php file -->

    <?php include "footer.php" ?>


    <script src="<?= APP_URL ?>/js/front.js"></script>
</body>

</html>