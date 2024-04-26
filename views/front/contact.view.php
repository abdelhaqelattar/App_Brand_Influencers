<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= APP_URL ?>/css/all.css">
    <link rel="stylesheet" href="<?= APP_URL ?>/css/front/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contact</title>
</head>

<body>
    <?php
    $page = "contact";
    include "header.php"
    ?>

    <main>
        <section class="page">
            <div class="container">
                <h2 class="section-title">Contact Us</h2>
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar</p>
            </div>
        </section>
        <section class="contact">
            <div class="container d-flex flex-row-reverse flex-wrap">                
                <div class="col-12 col-lg-6 contact-text">
                    <h2 class="section-title m-0">Get In Touch With Us</h2>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar sapien</p>
                    <ul>
                        <li class="d-flex gap-4 align-center">
                            <i class="fa-solid fa-circle-check background3"></i>
                            <div>
                                <h2 class="mb-1">Our Office</h2>
                                <p class="text-secondary mt-0">Office 478 Vienna, AU 92101</p>
                            </div>
                        </li>
                        <hr class="hr">
                        <li class="d-flex gap-4 align-center">
                            <i class="fa-solid fa-circle-check background3"></i>
                            <div>
                                <h2 class="mb-1">Our Phone</h2>
                                <p class="text-secondary mt-0">+0 (555) 123 45 67</p>
                            </div>
                        </li>
                        <hr>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2729.2634225481465!2d-5.3641314229593355!3d35.56211115519041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b4245d0028d49%3A0xf354d6c86ac4d983!2s%C3%89cole%20nationale%20des%20sciences%20appliqu%C3%A9es%20de%20T%C3%A9touan!5e0!3m2!1sen!2sma!4v1681944054841!5m2!1sen!2sma" width="100%" height="250" style="border:0; margin-bottom: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-12 col-lg-6">
                    <form action="<?=APP_URL?>/contact" method="POST">
                        <input type="text" name="name" placeholder="Your Name">
                        <input type="text" name="email" placeholder="Your Email">
                        <input type="text" name="phone" placeholder="Your Phone">
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" rows="8" placeholder="Your Message"></textarea>
                        <button class="btn btn-primary w-100 d-block">Send message <i class="fa-solid fa-angles-right"></i></button>
                    </form>
                </div>
            </div>
        </section>
        <section class="faq" style="padding-top: 0px;">
            <div class="container">
                <div class="title">
                    <h2 class="section-title">General Questions</h2>
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