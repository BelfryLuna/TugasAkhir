<!-- untuk manggil isi template -->
<?= $this->extend('layoutuser/templateuser'); ?>
<?= $this->section('content'); ?>


<section class="blog_detail_section">
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
        
        <div class="blog_inner_pannel mt-3" data-aos="fade-up" data-aos-duration="1500">
            <!-- <div class="review">
                <span>Kategori</span>
                <span></span>
            </div> -->
            <div class="section_title">
                <h2><?= $blog['judul']; ?></h2>
            </div>
            <div class="main_img" style="text-align: center;">
                <img src="<?= base_url(); ?>/images/<?= $blog['foto']; ?>" alt="image">
            </div>
            <div class="info">
                <div style="text-align: justify;">
                    <p><?= $blog['content']; ?></p>
                </div>
                <div class="blog_authore">
                    <div class="authore_info">
                        <div class="avtar">
                            <img src="<?= base_url(); ?>/assets/images/blog1.png" alt="image" style="text-align: center;">
                        </div>
                        <div class="text" style="text-align: justify;">
                            <h5>Narasumber: dr. Fatimah Purba, Sp.PD</h5>
                            <span>Dokter spesialis penyakit dalam</span>
                        </div>
                    </div>
                    <div class="social_media">
                        <ul>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="blog_tags">
                    <ul>
                        <li class="tags">
                            <p>Kategori:</p>
                        </li>
                        <li><span><?= $blog['kategori']; ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
</section>
<!-- Story-Section-Start -->
<section class="row_am latest_story" id="blog" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
    <!-- container start -->
    <div class="container">
        <div class="section_title">
            <h2>Baca <span>informasi penyakit</span> lainnya</h2>
            <p>Sahabat Lambung memuat informasi mengenai penyakit lambung <br> berupa postingan blog.</p>
        </div>
        <!-- row start -->
        <div class="row mt-4 mb-3">
            <!-- story -->
            <?php $i = 0; ?>
            <?php foreach($lain as $p) : ?>
            <div class="col-md-4">
                <div class="story_box">
                    <div class="story_img">
                        <img src="<?= base_url(); ?>/images/<?= $p['foto']; ?>" alt="image">
                        <span><?= $p['kategori']; ?></span>
                    </div>
                    <div class="story_text">
                        <h3><?= $p['judul']; ?></h3>
                        <p></p>
                        <a href="/info_penyakit/<?= $p['id']; ?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php if (++$i == 3) break; ?>
            <?php endforeach; ?>

            <div class="col-md-12 mt-3 text-center">
              <a class="btn puprple_btn" href="<?= base_url('/info_penyakit'); ?>">Lainnya</a>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- Story-Section-end -->


<?= $this->endSection(); ?>