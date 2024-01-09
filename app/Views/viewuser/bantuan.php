<!-- untuk manggil isi template -->
<?= $this->extend('layoutuser/templateuser'); ?>
<?= $this->section('content'); ?>

<!-- How-It-Workes-Section-Start -->
<section class="row_am how_it_works" id="how_it_work">
    <!-- container start -->
    <div class="container">
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
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2>Bantuan penggunaan <span>Sahabat Lambung</span></h2>
            <!-- p -->
            <p>Sahabat Lambung memiliki tiga fitur utama <br> yang petunjuk penggunaannya dapat Anda lihat di bawah ini.</p>
        </div>
        <div class="how_it_inner">
            <div class="step_block">
                <!-- UL -->
                <ul>
                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                            <h4>Melihat informasi penyakit</h4>
                            <p>Dimulai dari mengakses halaman penyakit, lalu melihat daftar artikel info penyakit dan dilanjutkan melihat detail info penyakit.
                            <br>Cara melihat informasi penyakit dapat Anda lihat dalam video ini</p>    
                        </div>
                        <div class="step_number">
                            <h3>01</h3>
                        </div>
                        <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                            <img src="<?= base_url(); ?>/assets/images/info.gif" alt="image" style="border-radius: 10px;">
                        </div>
                    </li>

                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                            <h4>Melakukan Diagnosa</h4>
                            <p>Dimulai dari mengakses laman diagnosa, mengisi biodata dan gejala yang dirasakan, melihat hasil diagnosa dan mengisi kuisioner.
                            <br>Cara melakukan diagnosa dapat Anda lihat dalam vdeo ini</p>
                        </div>
                        <div class="step_number">
                            <h3>02</h3>
                        </div>
                        <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                            <img src="<?= base_url(); ?>/images/diagnosis.gif" alt="image" style="border-radius: 10px;">
                        </div>
                    </li>

                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                            <h4>Melihat riwayat diagnosa</h4>
                            <p>Dimulai dari mengakses laman iwayat, lalu melihat daftar riwayat pengguna dan melihat detail riwayat
                            <br>Untuk melihat riwayat diagnosa dapat Anda lihat dalam video ini</p>
                        </div>
                        <div class="step_number">
                            <h3>03</h3>
                        </div>
                        <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                            <img src="<?= base_url(); ?>/assets/images/riwayat.gif" alt="image" style="border-radius: 10px;">
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- video section start -->
        <div class="yt_video" data-aos="fade-in" data-aos-duration="1500">
            <!-- animation line -->
            <div class="anim_line dark_bg">
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
            <div class="thumbnil">
                <img src="<?= base_url(); ?>/images/infobantuan.png" alt="image" style="border-radius: 10px;" >
                <a class="popup-youtube play-button" href="https://wa.me/6281226694349" target="_blank">
                    <span class="play_btn">
                        <img src="<?= base_url(); ?>/assets/images/live-chat.png" alt="image" style="width: 100%;">
                        <div class="waves-block">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </span>
                    Masih kebingungan dalam menggunakan sahabat lambung?
                    <span>Yuk hubungi Developernya<br>Dengan klik icon di atas!</span>
                </a>
            </div>
        </div>
        <!-- video section end -->
    </div>
    <!-- container end -->
</section>
<!-- How-It-Workes-Section-end -->

<?= $this->endSection(); ?>