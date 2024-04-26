<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= APP_URL ?>/css/all.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/css/front/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Service Detail</title>
    <style>
        .service-detail {
            padding: 150px 0 0;
        }

        .service-detail .text {
            padding-right: 50px;
        }

        .service-detail .features i {
            color: #F99417;
        }

        .service-detail .img {
            background-image: url("https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/moving-forward-on-their-next-campaigne-young-creative-professionals-working-in-an-office--e1680509182408.jpg");
            background-size: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php
    $page = "services";
    include "header.php"
    ?>


    <main>
        <section class="page">
            <div class="container">
                <h2 class="section-title">Campaign Strategy</h2>
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar</p>
            </div>
        </section>
        <section class="service-detail">
            <div class="container d-flex flex-row-reverse flex-wrap">
                <div class="col-12 col-lg-6 img">
                </div>
                <div class="col-12 col-lg-6 text">
                    <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada. Suspendisse faucibus interdum</p>
                    <div class="stats-item">
                        <div class="d-flex space-between align-center">
                            <h3 class="title">Content Campaign</h3>
                            <span>95%</span>
                        </div>
                        <div class="progress">
                            <div style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="stats-item">
                        <div class="d-flex space-between align-center">
                            <h3 class="title">Business Strategy</h3>
                            <span>95%</span>
                        </div>
                        <div class="progress">
                            <div style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap features">
                        <div class="col-6 d-flex align-center gap-3">
                            <i class="fa-solid fa-circle-check"></i>
                            <p class="text-secondary">aliquet lectus proin nibh</p>
                        </div>
                        <div class="col-6 d-flex align-center gap-3">
                            <i class="fa-solid fa-circle-check"></i>
                            <p class="text-secondary">aliquet lectus proin nibh</p>
                        </div>
                        <div class="col-6 d-flex align-center gap-3">
                            <i class="fa-solid fa-circle-check"></i>
                            <p class="text-secondary">aliquet lectus proin nibh</p>
                        </div>
                        <div class="col-6 d-flex align-center gap-3">
                            <i class="fa-solid fa-circle-check"></i>
                            <p class="text-secondary">aliquet lectus proin nibh</p>
                        </div>
                        <div class="col-6 d-flex align-center gap-3">
                            <i class="fa-solid fa-circle-check"></i>
                            <p class="text-secondary">aliquet lectus proin nibh</p>
                        </div>
                        <div class="col-6 d-flex align-center gap-3">
                            <i class="fa-solid fa-circle-check"></i>
                            <p class="text-secondary">aliquet lectus proin nibh</p>
                        </div>
                    </div>
                    <a href="<?= APP_URL ?>/register" class="btn btn-primary mt-5 d-inline-block">GET STARTED <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
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
                        <div>
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
                    <a href="" class="btn btn-primary">View All <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </section>
    </main>

    <?php include "footer.php" ?>

    <script src="<?= APP_URL ?>/js/front.js"></script>
</body>

</html>