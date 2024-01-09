<!--Experts Team Section Start  -->
<section class="row_am experts_team_section">
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
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <!-- h2 -->
            <h2> Pengembang dari <span>Sahabat Lambung</span></h2>
            <!-- p -->
            <p>
                Sahabat Lambung dikembangkan bersama <br> dokter spesialis penyakit berpengalaman dan lainnya.
            </p>
        </div>
        <div class="row">
            <?php foreach($pengembang as $p) : ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <div class="experts_box">
                    <img src="<?= base_url(); ?>/images/<?= $p['foto']; ?>" alt="image">
                    <div class="text">
                        <h3><?= $p['nama']; ?></h3>
                        <span><?= $p['status']; ?></span>
                        <!-- <ul class="social_media">
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why we are section Start -->
<section class="row_am why_we_section" data-aos="fade-in">
    <div class="why_inner">
        <div class="container">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <h2>Kenapa harus menggunakan <span>Sahabat Lambung</span>?</h2>
                <p>Sahabat Lambung sebagai sistem pakar memliki beberapa kelebihan.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4">
                    <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                        <div class="icon">
                            <img src="<?= base_url(); ?>/assets/images/communication.png" alt="image">
                            
                        </div>
                        <div class="text">
                            <h3>Informasi dan Pengetahuan</h3>
                            <p> Sistem pakar dapat memberikan akses cepat terhadap informasi dan pengetahuan yang mungkin sulit ditemukan atau dipahami dalam bidang tertentu.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                        <div class="icon">
                            <img src="<?= base_url(); ?>/assets/images/abt_functional.png" alt="image">
                        </div>
                        <div class="text">
                            <h3>Diagnosis Awal Medis</h3>
                            <p>Sistem pakar medis yang dapat membantu memahami gejala penyakit dan memberikan saran awal tentang apa yang mungkin menjadi masalah kesehatan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                        <div class="icon">
                            <img src="<?= base_url(); ?>/assets/images/abt_support.png" alt="image">
                        </div>
                        <div class="text">
                            <h3>Efisiensi Waktu dan Uang</h3>
                            <p>Dengan sistem pakar dapat memberikan efisiensi waktu dan uang yang biasanya dihabiskan untuk konsultasi atau pencarian informasi secara manual.</p>
                        </div>
                    </div>
                </div>
                </di>
            </div>
        </div>
</section>

<table>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>

<style>
    table {border: none;}
</style>

