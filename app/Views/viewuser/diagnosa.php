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
            <h2>Diagnosis Awal <span>Penyakit</span></h2>
            <!-- p -->
            <p>Berikut adalah fitur diagnosis awal Sahabat Lambung<br>Sebelum melakukan diagnosis awal silakan isi biodaa terlebih dahulu</p>
        </div>


        <div class="signup_form col-12" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <div class="section_title">
                <h2>Isi <span>Biodata<i class="fa fa-address-book-o" aria-hidden="true"></i></span></h2>
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    <strong>Silakan isi biodata</strong> Anda terlebih dahulu.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <form action="/diagnosa/hasil" method="post">
                <?= csrf_field() ?>
                <div class="form-group mt-3">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" value="<?= old('nama'); ?>" placeholder="<?= ($validation->getError('nama')) ? $validation->getError('nama') : 'Ketikkan nama lengkap Anda'; ?>">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control <?= ($validation->hasError('umur')) ? 'is-invalid' : ''; ?>" id="umur" name="umur" value="<?= old('umur'); ?>" placeholder="<?= ($validation->getError('umur')) ? $validation->getError('umur') : 'Ketikkan usia Anda'; ?>">
                </div>
                <div class="form-group">
                    <select id="inputState" name="jk[]" class="form-control default-select <?= ($validation->hasError('jk')) ? 'is-invalid' : ''; ?>">
                        <option selected value="<?= false; ?>">Pilih Jenis Kelamin Anda</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>


                <div class="section_title mt-5">
                    <h2><span>Diagnosis Awal<i class="fa-solid fa-stethoscope"></i> </span> Penyakit</h2>
                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        <strong>Silakan memilih beberapa gejala</strong> yang sesuai dengan kondisi yang Anda alami dengan menekan <strong><i class="fa fa-square-o" aria-hidden="true"></i> Ya</strong> , jika sudah memilih semua gejala yang sesuai, selanjutnya tekan tombol <strong>SUBMIT<i class="fa-solid fa-stethoscope"></i></strong> di bawah untuk melihat hasil diagnosis.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <section class="row_am pricing_section" id="pricing">
                    <!-- container start -->
                    <div class="container">
                        <!-- pricing box  monthly start -->
                        <div class="pricing_pannel monthly_plan active mt-1">
                            <!-- row start -->
                            <div class="row">
                                <!-- pricing box 1 -->
                                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1500">
                                    <div class="pricing_block">
                                        <div class="icon">
                                            <img src="<?= base_url(); ?>/assets/images/asli4.png" alt="image">
                                        </div>
                                        <div class="pkg_name">
                                            <!-- <h3>StAndard</h3> -->
                                            <h3>Memerlukan waktu kurang <br> dari 2-3 menit</h3>
                                        </div>

                                    </div>
                                </div>

                                <!-- pricing box 3 -->
                                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1500">
                                    <div class="pricing_block">
                                        <div class="icon">
                                            <img src="<?= base_url(); ?>/assets/images/asli2.png" alt="image">
                                        </div>
                                        <div class="pkg_name">
                                            <!-- <h3>Premium</h3> -->
                                            <h3>Jawab berdasarkan gejala <br> yang Anda rasakan</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                        </div>
                        <!-- pricing box monthly end -->
                    </div>
                    <!-- container start end -->
                </section>
                <!--  -->
                <div class="container-fluid">
                    <?= csrf_field(); ?>
                    <?php foreach ($gejala as $g) : ?>
                        <div class="card">
                            <div class="project-list-group">
                                <div class="project-info">
                                    <div class="col-xl-11 my-2 col-lg-6 col-sm-6">
                                        <p class="text-primary mb-1"><i class="fa-solid fa-list"></i> <?= $g['kode_gejala']; ?></p>
                                        <h5 class="title font-w600"><a href="javascript:void(0);" class="text-black">Anda mengalami <?= $g['deskripsi_gejala']; ?>.</a></h5>
                                    </div>
                                    <div class="col-xl-1">
                                        <div class="project-status align-items-center">
                                            <div class="form-check check-lg">
                                                <input id="checkbox1" class="form-check-input" type="checkbox" name="kode_gejala[]" value="<?= $g['kode_gejala']; ?>">
                                                <label for="checkbox1" class="form-check-label">Ya</label>
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
                    <button class="btn puprple_btn" type="submit">SUBMIT <i class="fa-solid fa-stethoscope"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- container end -->
</section>
<!-- How-It-Workes-Section-end -->

<?= $this->endSection(); ?>