<!-- untuk manggil isi template -->
<?= $this->extend('layoutuser/templateuser'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="<?= base_url(); ?>/vendor/chartist/css/chartist.min.css">
<link href="<?= base_url(); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

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
            <h2>Kuisioner <span>User Acceptance Test(UAT)</span></h2>
            <!-- p -->
            <p>Berdasarkan pengalaman yang Anda dapat setelah menggunakan Sahabat Lambung <br> Silahkan isi kuisioner berikut sesuai dengan pengalaman Anda.</p>
        </div>


        <div class="signup_form col-12" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <div class="section_title">
                <h2>Isi <span>Kuisioner<i class="fa fa-file-text-o" aria-hidden="true"></i></span></h2>
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    <strong>Silakan isi kuisioner</strong> dibawah ini, jika sudah tekan tombol <strong>SUBMIT <i class="fa fa-file-text-o" aria-hidden="true"></i></strong> di bawah untuk mengirim form kuisioner.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <form action="/diagnosa/proseskuis" method="post">
                <?= csrf_field() ?>
                <!--  -->
                <div class="container-fluid">
                    <?php 
                    $i = 1;
                    foreach($pertanyaan as $pt) : ?>
                    <div class="card">
                        <div class="project-list-group">
                            <div class="project-info">
                                <div class="col-xl-8 my-2 col-lg-6 col-sm-6">
                                    <p class="text-primary mb-1"><i class="fa-solid fa-list"></i> No. <?= $i++; ?></p>
                                    <h5 class="title font-w600" for="customCheckBox4"><a href="javascript:void(0);" class="text-black"><?= $pt['text']; ?>?</a></h5>
                                </div>

                                <div class="col-xl-1">
                                    <div class="project-status align-items-center">

                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="project-status align-items-center">
                                        <div class="form-group">
                                            <label><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></label>
                                            <input type="hidden" name="idpertanyaan[]" value="<?= $pt['id']; ?>">
                                            <select class="form-control default-select" id="sel1" name="jawaban[]" required>
                                                <option selected value="<?= false; ?>">Pilih jawaban</option>
                                                <option value="Sangat Setuju">Sangat Setuju</option>
                                                <option value="Setuju">Setuju</option>
                                                <option value="Kurang Setuju">Kurang Setuju</option>
                                                <option value="Tidak Setuju">Tidak Setuju</option>
                                                <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!--  -->
                <div class="form-group">
                    <button class="btn puprple_btn" type="submit">SUBMIT <i class="fa fa-file-text-o" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- container end -->
</section>
<!-- How-It-Workes-Section-end -->

<?= $this->endSection(); ?>