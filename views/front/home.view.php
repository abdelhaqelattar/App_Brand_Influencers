<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= APP_URL ?>/css/all.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/css/front/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>

<body>
    <?php
    $page = "home";
    include "header.php"
    ?>

    <main>
        <section class="hero">
            <div class="container">
                <div class="d-flex flex-wrap">
                    <div class="col-12 col-lg-6 text">
                        <h1>Connecting Your Brand With The Right
                            <span class="p-relative">
                                <span>Voices</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                    <path stroke="#F99417" class="style-color" d="M6.5,75.5s25-29,50,0,50,0,50,0,25-32,50,0,50-1,50-1,25-30,50,1,50,0,50,0,27-28,50,0,50,0,50,0,26-25,50,0,36,7,36,7" transform="translate(-3.09 -56.78)"></path>
                                </svg>
                            </span>
                        </h1>
                        <p class="text-secondary"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar.</p>
                        <a href="<?=APP_URL?>/register" class="btn btn-primary mt-5 d-inline-block">Get started <i class="fa-solid fa-angles-right"></i></a>
                        <ul class="d-flex flex-wrap list">
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Identification</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Strategy and Planning</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Trend analysis</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-wrap images">
                        <div class="col-12 col-lg-6 image1">
                            <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/04/Hero-Girls.jpg" alt="">

                        </div>
                        <div class="col-12 col-lg-6 image2">
                            <div class="play">
                                <i class="fa-solid fa-play background"></i>
                                <h2>PLAY VIDEO</h2>
                            </div>
                            <div class="img">
                                <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/04/Hero-Man.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="partners d-flex flex-wrap space-between gap-4">
                    <img class="col-12 col-lg-3" src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-3@2x.png" class="attachment-full size-full wp-image-204" alt="" decoding="async" loading="lazy" srcset="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-3@2x.png 338w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-3@2x-300x74.png 300w" sizes="(max-width: 338px) 100vw, 338px">
                    <img class="col-12 col-lg-3" src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-2@2x.png" class="attachment-full size-full wp-image-205" alt="" decoding="async" loading="lazy" srcset="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-2@2x.png 335w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-2@2x-300x73.png 300w" sizes="(max-width: 335px) 100vw, 335px">
                    <img class="col-12 col-lg-3" src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-1@2x.png" class="attachment-full size-full wp-image-206" alt="" decoding="async" loading="lazy" srcset="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-1@2x.png 339w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-1@2x-300x72.png 300w" sizes="(max-width: 339px) 100vw, 339px">
                </div>
            </div>
        </section>
        <section class="story">
            <div class="container">
                <h2 class="section-title">We Have Been Established Since 2009 With A Lot Of Experience</h2>
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
                        <a href="<?=APP_URL?>/about" class="btn btn-primary d-inline-block">About Us <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="social-media text-center">
            <ul class="d-flex flex-wrap container">
                <li class="col-12 col-lg-3">
                    <i class="fa-brands fa-youtube"></i>
                    <span class="number">25 M</span>
                    <span>Subscribers</span>
                </li>
                <li class="col-12 col-lg-3">
                    <i class="fa-brands fa-tiktok"></i>
                    <span class="number">15 M</span>
                    <span>Followers</span>
                </li>
                <li class="col-12 col-lg-3">
                    <i class="fa-brands fa-twitter"></i>
                    <span class="number">789 K</span>
                    <span>Followers</span>
                </li>
                <li class="col-12 col-lg-3">
                    <i class="fa-brands fa-instagram"></i>
                    <span class="number">22 M</span>
                    <span>Followers</span>
                </li>
            </ul>
        </section>
        <section class="register">
            <div class="container">
                <div>
                    <h2 class="section-title">Amplify Your Brand's Voice With Our Expert Influencer Marketing Agency</h2>
                    <div class="buttons">
                        <a href="<?=APP_URL?>/register" class="btn btn-primary">Register Now <i class="fa-solid fa-angles-right"></i></a>
                        <span>OR</span>
                        <a href="<?=APP_URL?>/contact" class="btn btn-secondary">Contact Us <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="background"></div>
        </section>
        <section class="services">
            <div class="container">
                <div class="title-center">
                    <h2 class="section-title mb-2">What Will We Give You?</h2>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
                <div class="services-grid d-flex flex-wrap justify-center">
                    <div class="service-card col-12 col-sm-6 col-lg-3 ">
                        <div>
                            <h3>Influencer Research</h3>
                            <p class="text-secondary">Lorem ipsum dolor</p>
                            <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Icon-1@2x.png">
                            <a href="<?=APP_URL?>/service-detail" class="btn btn-empty-primary">Read More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                    <div class="service-card col-12 col-sm-6 col-lg-3 ">
                        <div class="focus">
                            <h3>Influencer Research</h3>
                            <p class="text-secondary">Lorem ipsum dolor</p>
                            <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Icon-2@2x.png" alt="">
                            <a href="<?=APP_URL?>/service-detail" class="btn btn-empty-primary">Read More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                    <div class="service-card col-12 col-sm-6 col-lg-3 ">
                        <div>
                            <h3>Influencer Research</h3>
                            <p class="text-secondary">Lorem ipsum dolor</p>
                            <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Icon-4@2x.png" alt="">
                            <a href="<?=APP_URL?>/service-detail" class="btn btn-empty-primary">Read More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                    <div class="service-card col-12 col-sm-6 col-lg-3 ">
                        <div>
                            <h3>Influencer Research</h3>
                            <p class="text-secondary">Lorem ipsum dolor</p>
                            <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Icon-3@2x.png" alt="">
                            <a href="<?=APP_URL?>/service-detail" class="btn btn-empty-primary">Read More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="buttons text-center">
                    <a href="<?=APP_URL?>/services" class="btn btn-primary">View All <i class="fa-solid fa-angles-right"></i></a>
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
        <section class="influencers">
            <div class="container">
                <div class="d-flex align-center flex-wrap">
                    <h2 class="section-title col-12 col-lg-6 px-24">Find The Best Influencers To Help Your Business</h2>
                    <p class="text-secondary col-12 col-lg-6 px-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada. Suspendisse faucibus interdum</p>
                </div>
                <ul class="categories d-flex flex-wrap">
                    <li class="col-12 col-lg-4">
                        <span>Product</span>
                    </li>
                    <li class="col-12 col-lg-4">
                        <span>Gaming</span>
                    </li>
                    <li class="col-12 col-lg-4">
                        <span class="focus">Sports</span>
                    </li>
                </ul>
                <div class="influencer-card d-flex flex-wrap mt-5">
                    <img class="col-12 col-lg-4" src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Influencer-6.png" alt="">
                    <div class="flex-1">
                        <h3 class="name">Caesar Sowle</h3>
                        <h4 class="role">Influencer</h4>
                        <span class="divider"></span>
                        <h3 class="title">Experience</h3>
                        <p class="text-secondary">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="stats">
                            <div class="stats-item">
                                <div class="d-flex space-between align-center">
                                    <h3 class="title">Content</h3>
                                    <span>90%</span>
                                </div>
                                <div class="progress">
                                    <div style="width: 90%;"></div>
                                </div>
                            </div>
                            <div class="stats-item">
                                <div class="d-flex space-between align-center">
                                    <h3 class="title">Promotions</h3>
                                    <span>80%</span>
                                </div>
                                <div class="progress">
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-2 social">
                            <a href=""><i class="fa-brands fa-facebook background2 focus"></i></a>
                            <a href=""><i class="fa-brands fa-youtube background2"></i></a>
                            <a href=""><i class="fa-brands fa-instagram background2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="influencer-card d-flex flex-wrap mt-5">
                    <img class="col-12 col-lg-4" src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Influencer-5.png" alt="">
                    <div class="flex-1">
                        <h3 class="name">Caesar Sowle</h3>
                        <h4 class="role">Influencer</h4>
                        <span class="divider"></span>
                        <h3 class="title">Experience</h3>
                        <p class="text-secondary">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="stats">
                            <div class="stats-item">
                                <div class="d-flex space-between align-center">
                                    <h3 class="title">Content</h3>
                                    <span>90%</span>
                                </div>
                                <div class="progress">
                                    <div style="width: 90%;"></div>
                                </div>
                            </div>
                            <div class="stats-item">
                                <div class="d-flex space-between align-center">
                                    <h3 class="title">Promotions</h3>
                                    <span>80%</span>
                                </div>
                                <div class="progress">
                                    <div style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-2 social">
                            <a href=""><i class="fa-brands fa-facebook background2 focus"></i></a>
                            <a href=""><i class="fa-brands fa-youtube background2"></i></a>
                            <a href=""><i class="fa-brands fa-instagram background2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap diff gap-4">
                    <div class="col-12 col-lg-7 card d-flex flex-wrap align-center">
                        <div class="col-12 col-lg-6 title">
                            <h3>We Are Ready To Make A Difference</h3>
                        </div>
                        <div class="col-12 col-lg-6 description">
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                    <div class="flex-1 card d-flex flex-wrap align-center">
                        <div class="col-12 col-lg-6">
                            <span class="number">14 <sup>+</sup></span>
                            <span>Years Experience</span>
                        </div>
                        <div class="col-12 col-lg-6">
                            <span class="number">98 <sup>%</sup></span>
                            <span>Complete Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="whychooseus">
            <div class="container d-flex flex-wrap">
                <div class="col-12 col-lg-6">
                    <img src="<?= APP_URL ?>/assets/images/why_choose_us.png" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="section-title">Why Choose Influexa?</h2>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada. Suspendisse faucibus interdum</p>
                    <ul>
                        <li class="d-flex gap-4 align-center">
                            <i class="fa-solid fa-volume-high background"></i>
                            <div>
                                <h3>Promote Your Brands & Products</h3>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </li>
                        <li class="d-flex gap-4 align-center">
                            <i class="fa-solid fa-users-gear background"></i>
                            <div>
                                <h3>Professional Influencer</h3>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </li>
                        <li class="d-flex gap-4 align-center">
                            <i class="fa-solid fa-thumbs-up background"></i>
                            <div>
                                <h3>Successful Campaign</h3>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="howitworks">
            <div class="container d-flex flex-wrap gap-4">
                <div class="col-12 col-lg-7">
                    <!-- <table> -->
                    <div class="d-flex">
                        <div class="d-none d-lg-block col-6 text-right">
                            <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Arrow2@2x.png" alt="">
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card d-flex">
                                <i class="fa-solid fa-magnifying-glass background3"></i>
                                <div class="ml-2">
                                    <span class="text-secondary">Steps 01</span>
                                    <h3>Find Influencer</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-12 col-lg-6">
                            <div class="card d-flex">
                                <i class="fa-solid fa-folder background3"></i>
                                <div class="ml-2">
                                    <span class="text-secondary">Steps 02</span>
                                    <h3>Create A Content</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-none d-lg-block">
                            <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Arrow1@2x.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-6 d-none d-lg-block">
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card d-flex">
                                <i class="fa-solid fa-eye background3"></i>
                                <div class="ml-2">
                                    <span class="text-secondary">Steps 03</span>
                                    <h3>Monitoring</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </table> -->
                </div>
                <div class="flex-1 ">
                    <h2 class="section-title">How It Works ?</h2>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada.</p>
                    <a href="<?=APP_URL?>/faq" class="d-flex align-center"><i class="fa-solid fa-play background2"></i> VIEW TUTORIALS</a>

                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <div class="title text-center">
                    <h2 class="section-title">What Our Customers Say?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
                <div class="float-content">
                    <div class="review-cards d-flex flex-wrap">
                        <div class="col-12 col-lg-6 review-card">
                            <div class="card-header d-flex">
                                <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/a-young-a-man-with-his-hand-by-his-head-e1680514640620.jpg" alt="">
                                <div class="d-flex space-between flex-1">
                                    <div>
                                        <h2>Wade Lipsey</h2>
                                        <p>Influencer</p>
                                    </div>
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                            <p class="text-secondary mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                        </div>
                        <div class="col-12 col-lg-6 review-card">
                            <div class="card-header d-flex">
                                <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/a-young-a-man-with-his-hand-by-his-head-e1680514640620.jpg" alt="">
                                <div class="d-flex space-between flex-1">
                                    <div>
                                        <h2>Wade Lipsey</h2>
                                        <p>Influencer</p>
                                    </div>
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                            <p class="text-secondary mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="container">
                <div class="title">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header d-flex space-between align-center">
                            <h3>What is an influencer marketing agency?</h3>
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="accordion-content">
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header d-flex space-between align-center">
                            <h3>How does an influencer marketing agency work?</h3>
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="accordion-content">
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header d-flex space-between align-center">
                            <h3>How do I choose the right influencer marketing agency?</h3>
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="accordion-content">
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header d-flex space-between align-center">
                            <h3>How much does it cost to work with an influencer marketing agency?</h3>
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="accordion-content">
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "footer.php" ?>

    <script src="<?= APP_URL ?>/js/front.js"></script>
</body>

</html>