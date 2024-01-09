<!-- untuk manggil isi template -->
<?= $this->extend('layoutuser/templateuser'); ?>
<?= $this->section('content'); ?>

<!-- Banner-Section-Start -->
<section class="banner_section">
    <!-- container start -->
    <div class="container">
        <!-- vertical animation line -->
        <div class="anim_line">
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
        </div>
        <!-- row start -->
        <div class="row">
            <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1500">
                <!-- banner text -->
                <div class="banner_text">
                    <!-- h1 -->
                    <h1>Solusi bagi keluhan <span> lambung </span>Anda.</h1>
                    <!-- p -->
                    <p>Website Sahabat Lambung adalah sistem pakar yang dapat membantu mendiagnosis awal serta memberikan solusi bagi keluhan lambung Anda.
                    </p>
                    <li>
                        <a href="<?= base_url('/diagnosa'); ?>" class="btn puprple_btn"><i class="fa-solid fa-stethoscope"></i> Yuk Diagnosis!</a>

                    </li>
                    <div class="used_app">
                        <ul>
                            <li><img src="<?= base_url(); ?>/images/bb.png" alt="image"></li>
                            <li><img src="<?= base_url(); ?>/images/bj.png" alt="image"></li>
                            <!-- <li><img src="<?= base_url(); ?>/assets/images/3_used.png" alt="image"></li>
                            <li><img src="<?= base_url(); ?>/assets/images/4_used.png" alt="image"></li> -->
                        </ul>
                        <p style="text-align: justify;"><?= $diag['kode_hasil']; ?> + <br> mencoba sahabat lambung</p>
                    </div>
                </div>
                <!-- app buttons -->
                <!-- users -->
            </div>

            <!-- banner slides start -->
            <div class="col-lg-6 col-md-12" data-aos="fade-in" data-aos-duration="1500">
                <div class="banner_slider">
                    <div class="left_icon">
                        <img src="<?= base_url(); ?>/assets/images/shield_icon.png" alt="image">
                    </div>
                    <div id="frmae_slider" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider_img">
                                <img src="<?= base_url(); ?>/assets/images/screeen1.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider_img">
                                <img src="<?= base_url(); ?>/assets/images/screeen2.png" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider_img">
                                <img src="<?= base_url(); ?>/assets/images/screeen3.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="slider_frame">
                        <img src="<?= base_url(); ?>/assets/images/mobile_frame_svg.svg" alt="image">
                    </div>
                </div>
            </div>
            <!-- banner slides end -->

        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- Banner-Section-end -->

<!-- About-App-Section-Start -->
<section class="row_am about_app_section">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            <div class="col-lg-6">

                <!-- about images -->
                <div class="about_img" data-aos="fade-in" data-aos-duration="1500">
                    <div class="frame_img">
                        <img class="moving_position_animatin" src="<?= base_url(); ?>/assets/images/20230911_131554.png" alt="image">
                    </div>
                    <div class="screen_img">
                        <img class="moving_animation" src="<?= base_url(); ?>/assets/images/screeen51.png" alt="image" style="width: 90%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                <!-- about text -->
                <div class="about_text" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                    <div class="section_title">

                        <!-- h2 -->
                        <h2>Statistik pengguna dari <span>Sahabat Lambung.</span></h2>

                        <!-- p -->
                        <p>
                            Sahabat lambung memberikan fitur berupa diagnosis awal atas keluhan penyakit lambung Anda.
                            Penyakit lambung digolongkan dalam 3 jenis yaitu Gastritis, GERD dan Dispepsia yang rentan menyerang masyarakat pada usia produktif.
                        </p>
                    </div>

                    <!-- UL -->
                    <ul class="app_statstic" id="counter">
                        <li>
                            <div class="icon">
                                <img src="<?= base_url(); ?>/assets/images/allin.png" alt="image">
                            </div>
                            <div class="text">
                                <p><?= $diag['kode_hasil']; ?></p>
                                <p>Total Pengguna</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="<?= base_url(); ?>/assets/images/tesga.png" alt="image">
                            </div>
                            <div class="text">
                                <p><?= $gas['kode_hasil']; ?></p>
                                <p>Gastritis</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="<?= base_url(); ?>/assets/images/tesger.png" alt="image">
                            </div>
                            <div class="text">
                                <p><?= $ger['kode_hasil']; ?></p>
                                <p>GERD</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="<?= base_url(); ?>/assets/images/tesdu.png" alt="image">
                            </div>
                            <div class="text">
                                <p><?= $disp['kode_hasil']; ?></p>
                                <p>Dispepsia</p>
                            </div>
                        </li>
                    </ul>
                    <!-- UL end -->
                    <a href="<?= base_url('/diagnosa'); ?>" class="btn puprple_btn"><i class="fa-solid fa-stethoscope"></i> Yuk Diagnosis!</a>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- About-App-Section-end -->


<!-- ModernUI-Section-Start -->
<section class="row_am modern_ui_section">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            <div class="col-lg-6">
                <!-- UI content -->
                <div class="ui_text">
                    <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                        <h2>Berdasarkan ilmu dari <br> <span>Pakar Profesional</span></h2>
                        <p>
                            Sahabat lambung adalah sistem pakar yang dirancang untuk memuat keahlian atau pengetahuan ahli ke dalam bentuk sistem agar dapat membantu menemukan solusi atas keluhan Anda layaknya seorang pakar.
                        </p>
                    </div>
                    <ul class="design_block">
                        <li data-aos="fade-up" data-aos-duration="1500">
                            <h4>Dokter spesialis penyakit dalam</h4>
                            <p>dr. Fatimah Purba, Sp.PD adalah dokter spesialis penyakit dalam dengan pengalaman 11 tahun yang menjadi pakar dari sahabat lambung.</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1500">
                            <h4>User friendly</h4>
                            <p>Sahabat lambung memberikan desain yang ramah pengguna dan penyajian informasi yang detail sehingga tidak membingungkan pengguna.</p>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- UI Image -->
                <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                    <div class="left_img">
                        <img class="moving_position_animatin" src="<?= base_url(); ?>/assets/images/medium.png" alt="image" style="width: 80%;">
                    </div>
                    <!-- UI Image -->
                    <div class="right_img">
                        <!-- <img class="moving_position_animatin" src="<?= base_url(); ?>/assets/images/secure_data.png" alt="image"> -->
                        <!-- <img class="moving_position_animatin" src="<?= base_url(); ?>/assets/images/screeen6.png" alt="image" style="width: 70%;"> -->
                        <!-- <img class="moving_position_animatin" src="" alt="image"> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- ModernUI-Section-end -->

<?= $this->endSection(); ?>