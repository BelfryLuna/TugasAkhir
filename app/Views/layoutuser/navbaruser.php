<?php
$idip = explode("/", current_url());
$url = base_url();
?>

<!-- Header Start -->
<header>
    <!-- container start -->
    <div class="container">
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">
                <img src="<?= base_url(); ?>/images/logo1.png" alt="image" style="widht: 30%;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
              <div class="toggle-wrap">
                <span class="toggle-bar"></span>
              </div>
            </span>
          </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- secondery menu start -->
                    <li class="nav-item">
                        <a class="nav-link <?= (current_url() == $url . '/') ? 'active' : ''; ?>" href="<?= base_url('/'); ?>">Home</a>
                    </li>
                    <!-- secondery menu end -->

                    <li class="nav-item">
                        <a class="nav-link <?= (current_url() == $url . '/info_penyakit' || current_url() == $url . '/info_penyakit/' . end($idip)) ? 'active' : ''; ?>" href="<?= base_url('/info_penyakit'); ?>">Penyakit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (current_url() == $url . '/diagnosa' || current_url() == $url . '/diagnosa/' . end($idip)) ? 'active' : ''; ?>" href="<?= base_url('/diagnosa'); ?>/">Diagnosis</a>
                    </li>
                    <!-- secondery menu start -->
                    <!-- <li class="nav-item has_dropdown">
                        <a class="nav-link" href="#">Pages</a>
                        <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                        <div class="sub_menu">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="reviews.html">Reviews</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                                <li><a href="sign-up.html">Sign Up</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <!-- secondery menu end -->

                    <li class="nav-item">
                        <a class="nav-link <?= (current_url() == $url . '/riwayat_pengguna' || current_url() == $url . '/riwayat_pengguna/' . end($idip)) ? 'active' : ''; ?>" href="<?= base_url('/riwayat_pengguna'); ?>">Riwayat</a>
                    </li>

                    <!-- secondery menu start -->
                    <li class="nav-item">
                        <a class="nav-link <?= (current_url() == $url . '/pengembang') ? 'active' : ''; ?>" href="<?= base_url('/info_pengembang'); ?>">Pengembang</a>
                        <!-- <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                        <div class="sub_menu">
                            <ul>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <!-- secondery menu end -->

                    <li class="nav-item">
                        <a class="nav-link <?= (current_url() == $url . '/bantuan') ? 'active' : ''; ?>" href="<?= base_url('/bantuan'); ?>">Bantuan</a>
                    </li>
                    <?php if (logged_in()) { ?>
                        <li class="nav-item has_dropdown">
                            <a class="nav-link" href="javascript:void()"><i class="fa-regular fa-user"></i> <?= user()->username; ?></a>
                            <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                            <div class="sub_menu">
                                <ul>
                                    <li><a href="<?= base_url('/dashboard'); ?>">Dashboard</a></li>
                                    <li><a href="<?= base_url('logout'); ?>">Log Out</a></li>
                                </ul>
                            </div>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link dark_btn" href="<?= base_url('login'); ?>">Sign In</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <!-- navigation end -->
    </div>
    <!-- container end -->
</header>