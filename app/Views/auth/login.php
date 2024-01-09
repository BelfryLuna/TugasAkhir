<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/01-app-landing-page-defoult/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 06:52:53 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahabat Lambung | Sign In</title>

    <!-- icofont-css-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/icofont.min.css">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/aos.css">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/images/favicon2.png" type="image/x-icon">

    <!-- icon -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/flaticon.css">

</head>

<body>

    <!-- Page-wrapper-Start -->
    <div class="page_wrapper">

       

        <div class="full_bg">

            <div class="container">
                <section class="signup_section">

                    <div class="top_part">
                        <a href="<?= base_url('/'); ?>" class="back_btn"><i class="icofont-arrow-left"></i> Back</a>
                        <a class="navbar-brand" href="#">
                            <img src="<?= base_url(); ?>/images/footerlogo.png" alt="image">
                        </a>
                    </div>

                    <!-- Comment Form Section -->
                    <div class="signup_form">
                        <div class="section_title">
                            <h2> Welcome <span>Admin</span> </h2>
                            <p>Sign in hanya diperuntukkan bagi admin sahabat lambung</p>
                        </div>
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form action="<?= url_to('login') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Ketikkan Username atau Email anda">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Ketikkan Password anda">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn puprple_btn" type="submit"><span><i class="fa-solid fa-arrow-right-to-bracket"></span></i> Sign in</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>

        </div>



    </div>
    <!-- Page-wrapper-End -->
    <script src="https://kit.fontawesome.com/2b9fa48bbd.js" crossorigin="anonymous"></script>                                 
    <!-- Jquery-js-Link -->
    <script src="<?= base_url(); ?>/assets/js/jquery.js"></script>
    <!-- bootstrap-js-Link -->
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- aos-js-Link -->
    <script src="<?= base_url(); ?>/assets/j/aos.js"></script>
    <!-- main-js-Link -->
    <script src="<?= base_url(); ?>/assets/j/main.js"></script>

</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/01-app-landing-page-defoult/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 06:52:53 GMT -->

</html>