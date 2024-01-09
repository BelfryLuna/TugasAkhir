<!-- untuk manggil isi template -->
<?= $this->extend('layoutuser/templateuser'); ?>
<?= $this->section('content'); ?>

<!-- Story-Section-Start -->
<section class="row_am latest_story" id="blog">
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
        <div class="section_title mb-5" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
             <h2>Baca <span>Informasi Penyakit</span></h2>
            <p>Sahabat Lambung memuat informasi mengenai <br> penyakit lambung berupa postingan blog.</p>
        </div>
        <!-- row start -->
        <div class="row">
            <!-- story -->
            <?php foreach ($blog as $b) : ?>
                <div class="col-md-4 mb-4">
                    <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                        <div class="story_img">
                            <img src="<?= base_url(); ?>/images/<?= $b['foto']; ?>" alt="image">
                            <span><?= $b['kategori']; ?></span>
                        </div>
                        <div class="story_text">
                            <h3><?= $b['judul']; ?></h3>
                            <?php
                            $teks = substr($b['content'], 0, 100);
                            ?>
                            <?= $teks . '...'; ?>
                            <a href="/info_penyakit/<?= $b['id']; ?>">READ MORE</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- Story-Section-end -->


<?= $this->endSection(); ?>