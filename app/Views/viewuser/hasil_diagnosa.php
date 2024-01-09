<!-- untuk manggil isi template -->
<?= $this->extend('layoutuser/templateuser'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/vendor/chartist/css/chartist.min.css">
<link href="<?= base_url(); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?= base_url(); ?>/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>/css/style2.css" rel="stylesheet">
<!-- css asli -->
<link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet" />
<!-- Responsive-Style-link -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/responsive.css">

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
            <h2>Hasil <span>Diagnosis Awal</span></h2>
            <!-- p -->
            <p>Berikut adalah hasil diagnosis awal Anda<br> Berdasarkan gejala-gejala yang telah Anda pilih sebelumnya.</p>
        </div>
                    <!-- button uat -->
            <div class="uat">
                <div class="col-xl-12 col-lg-6 col-sm-6 text-center">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="mr-3 bgl-secondary text-secondary">
                                    <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Jika Anda telah melihat hasil diagnosa. Kembali lagi dan isi Kuisioner UAT</p>
                                    <a href="<?= base_url('diagnosa/kuisioner'); ?>" class="btn puprple_btn"></i> Yuk isi!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- button uat -->
        <div class="container-fluid" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <div class="row">
                <!-- biodata -->
                <div class="col-xl-5 col-xxl-8">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="section_title">
                                        <h2><span>Biodata</span> Pengguna</h2>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group mt-0 text-left">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="<?php if (session()->get('nama')) { echo session()->get('nama'); } ?>" disabled>
                                        </div>
                                        <div class="form-group mt-3 text-left">
                                            <label>Usia</label>
                                            <input type="text" class="form-control" name="umur" placeholder="<?php
                                            if (session()->get('umur')) {
                                            echo session()->get('umur');
                                            }
                                            ?>" disabled>
                                        </div>
                                        <div class="form-group mt-3 mb-4 text-left">
                                            <label>Jenis Kelamin</label>
                                             <input type="text" class="form-control" name="" placeholder="<?php 
                                               $jk = session()->get('jk');
                                                if (is_array($jk)) {
                                                echo implode(', ', $jk); // Gabungkan elemen-elemen dengan koma
                                                }
                                            ?>" disabled>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- biodata -->

                <!-- hasil diagnosa -->
                <div class="col-xl-5 col-xxl-4">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-secondary">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="mr-3">
                                            <i class="fa-solid fa-stethoscope"></i>
                                        </span>
                                        <div class="media-body text-white" style="text-align: justify;">
                                            <p class="mb-1">Hasil Diagnosis Awal</p>
                                            <h4 class="text-white"><?= $pLain[0]['nama_penyakit']; ?> | <?= substr($pLain[0]['nilai'], 0, 5); ?>%</h4>
                                            <div class="progress mb-2 bg-primary">
                                                <div class="progress-bar progress-animated bg-light" style="width: <?= substr($pLain[0]['nilai'], 0, 5); ?>%"></div>
                                            </div>
                                            <small>Berdasarkan gejala yang dipilih kemungkinan jenis penyakit lambung yang diderita adalah <?= $pLain[0]['nama_penyakit']; ?> dengan persentase <?= substr($pLain[0]['nilai'], 0, 5); ?>%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-sm-6">

                            <div class="widget-stat card">
                                <div class="card-body p-4">
                                    <div class="media ai-icon">
                                         <div class="media-body" style="text-align: justify;">
                                           <p class="mb-1">Kemungkinan penyakit lain</p>
                                           <table cellspacing="0" cellpadding="0">
                                            <?php
                                            foreach ($pLain as $p) {
                                                if ($p['kode_penyakit'] != $maxN) { ?>
                                                <tr>
                                                    <td><h4 class="mb-0"><?= $p['nama_penyakit']; ?></h4></td>
                                                    <td><span class="badge badge-secondary"><?= substr($p['nilai'], 0, 5); ?>%</span></td>
                                                </tr>
                                            <?php }
                                            } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hasil diagnosa -->

            </div>
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <section class="row_am faq_section">
                        <!-- container start -->
                        <div class="container">
                            <!-- faq data -->
                            <div class="faq_panel mt-0">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                                                    <i class="icon_faq icofont-plus"></i></i>Daftar Gejala</button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php foreach ($hasilD as $hd) : ?>
                                                    <div class="card">
                                                        <div class="project-list-group">
                                                            <div class="project-info">
                                                                <div class="col-xl-10 my-2 col-lg-6 col-sm-6">
                                                                    <p class="text-primary mb-1"><i class="fa-solid fa-list"></i> <?= $hd['kode_gejala']; ?></p>
                                                                    <h5 class="title font-w600" for="customCheckBox4"><a href="javascript:void(0);" class="text-black"><?= $hd['deskripsi_gejala']; ?></a></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- container end -->
                    </section>
                </div>
            </div>

            <div class="row">
                <!-- deskripsi penyakit -->
                <div class="col-xl-5 col-xxl-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="section_title">
                                <h2><span><?= $pLain[0]['nama_penyakit']; ?></span></h2>
                            </div>
                        </div>
                        <div class="card-body" style="text-align: justify;">
                            <p><?= $pLain[0]['desk']; ?></p>
                        </div>
                    </div>
                </div>
                <!-- deskripsi penyakit -->

                <!-- solusi penjelasan pengobatan dan pencegahan -->
                <div class="col-xl-5 col-xxl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="default-tab">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home"><i class="fa fa-medkit mr-2"></i> Pengobatan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile"><i class="fa fa-plus-square mr-2"></i> Pencegahan</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                                <div class="pt-4" style="text-align: justify;">
                                                    <h4>Solusi Pengobatan:</h4>
                                                    <p><?= $pLain[0]['pengobatan']; ?></p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile">
                                                <div class="pt-4" style="text-align: justify;">
                                                    <h4>Solusi Pencegahan:</h4>
                                                    <p><?= $pLain[0]['pencegahan']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- solusi penjelasan pengobatan dan pencegahan -->
            </div>

            <!-- jenis obat -->
            <section class="row_am trusted_section">
                <!-- container start -->
                <div class="container">
                    <div class="section_title">
                        <!-- h2 -->
                        <h2>Jenis <span>Obat <i class="fa fa-medkit mr-2"></i></span></h2>
                        <!-- p -->
                        <p>Berikut foto produk merk dagang(populer) dari jenis pengobatan penyakit lambung <br> Untuk dosis dan cara pemakaian dapat dilihat pada solusi pengobatan di atas</p>
                    </div>

                    <!-- screen slider start -->
                    <div class="screen_slider">
                        <div id="screen_slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="screen_frame_img">
                                    <div class="card-bx stacked card">
                                        <!-- masukin gambar -->
                                        <img src="<?= base_url(); ?>/images/<?= $pLain[0]['gambar']; ?>" name="gambar4" alt="">
                                        <!-- masukin keterangan atas -->
                                        <div class="card-info">
                                            <p class="fs-14 mb-1 text-white text-left">Antasida (Simptomatik)</p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">Promag</h2>
                                                <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                </svg>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <!-- masukin keterangan bawah -->
                                            <div class="d-flex text-left">
                                                <div class="mr-4 text-white">
                                                    <p class="fs-12 mb-1 op6"> </p>
                                                    <span>Kategori: Obat bebas</span>
                                                    <br>
                                                    <span> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="screen_frame_img">
                                    <div class="card-bx stacked card">
                                        <!-- masukin gambar -->
                                        <img src="<?= base_url(); ?>/images/<?= $pLain[0]['gambar3']; ?>" name="gambar4" alt="">
                                        <!-- masukin keterangan atas -->
                                        <div class="card-info">
                                            <p class="fs-14 mb-1 text-white text-left">Prokinetik (Simptomatik)</p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">Domperidone</h2>
                                                <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                </svg>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <!-- masukin keterangan bawah -->
                                            <div class="d-flex text-left">
                                                <div class="mr-4 text-white">
                                                    <p class="fs-12 mb-1 op6"> </p>
                                                    <span>Kategori: Dengan resep dokter</span>
                                                    <br>
                                                    <span> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="screen_frame_img">
                                    <div class="card-bx stacked card">
                                        <!-- masukin gambar -->
                                        <img src="<?= base_url(); ?>/images/<?= $pLain[0]['gambar4']; ?>" name="gambar4" alt="">
                                        <!-- masukin keterangan atas -->
                                        <div class="card-info">
                                            <p class="fs-14 mb-1 text-white text-left">H2 Antagonis (Teurapetik)</p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">Raniditine</h2>
                                                <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                </svg>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <!-- masukin keterangan bawah -->
                                            <div class="d-flex text-left">
                                                <div class="mr-4 text-white">
                                                    <p class="fs-12 mb-1 op6"> </p>
                                                    <span>Kategori: Dengan resep dokter</span>
                                                    <br>
                                                    <span> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="screen_frame_img">
                                    <div class="card-bx stacked card">
                                        <!-- masukin gambar -->
                                        <img src="<?= base_url(); ?>/images/<?= $pLain[0]['gambar5']; ?>" name="gambar4" alt="">
                                        <!-- masukin keterangan atas -->
                                        <div class="card-info">
                                            <p class="fs-14 mb-1 text-white text-left">PPI (teurapetik) </p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">Omeprazole<br>Lansoprazole</h2>
                                                <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                </svg>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <!-- masukin keterangan bawah -->
                                            <div class="d-flex text-left">
                                                <div class="mr-4 text-white">
                                                    <p class="fs-12 mb-1 op6"> </p>
                                                    <span>Kategori: Dengan resep dokter </span>
                                                    <br>
                                                    <span> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="screen_frame_img">
                                    <div class="card-bx stacked card">
                                        <!-- masukin gambar -->
                                        <img src="<?= base_url(); ?>/images/<?= $pLain[0]['gambar2']; ?>" name="gambar4" alt="">
                                        <!-- masukin keterangan atas -->
                                        <div class="card-info">
                                            <p class="fs-14 mb-1 text-white text-left">Suplemen Probiotik</p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">Interlac</h2>
                                                <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                </svg>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <!-- masukin keterangan bawah -->
                                            <div class="d-flex text-left">
                                                <div class="mr-4 text-white">
                                                    <p class="fs-12 mb-1 op6"> </p>
                                                    <span>Kategori: Obat bebas</span>
                                                    <br>
                                                    <span> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="screen_frame_img">
                                    <div class="card-bx stacked card">
                                        <!-- masukin gambar -->
                                        <img src="<?= base_url(); ?>/images/<?= $pLain[0]['gambar6']; ?>" name="gambar4" alt="">
                                        <!-- masukin keterangan atas -->
                                        <div class="card-info">
                                            <p class="fs-14 mb-1 text-white text-left">Antiobitik</p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">Metronidazole<br>Amoksilin</h2>
                                                <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                </svg>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <!-- masukin keterangan bawah -->
                                            <div class="d-flex text-left">
                                                <div class="mr-4 text-white">
                                                    <p class="fs-12 mb-1 op6"> </p>
                                                    <span>Kategori: Dengan resep dokter </span>
                                                    <br>
                                                    <span> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- screen slider end -->
                </div>
                <!-- container end -->
            </section>
            <!-- jenis Obat -->
        </div>
</section>

<!-- Beautifull-interface-Section start -->



<?= $this->endSection(); ?>


<!-- Required vendors -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= base_url(); ?>/vendor/global/global.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?= base_url(); ?>/vendor/chart.js/Chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="<?= base_url(); ?>/vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="<?= base_url(); ?>/vendor/apexchart/apexchart.js"></script>


<script src="<?= base_url(); ?>/js/dashboard/my-wallet.js"></script>
<script src="<?= base_url(); ?>/vendor/owl-carousel/owl.carousel.js"></script>
<script src="<?= base_url(); ?>/vendor/swiper/js/swiper-bundle.min.js"></script>
<script src="<?= base_url(); ?>/js/custom.min.js"></script>

<script>
    $('input').on('change', function() {
        $('body').toggleClass('blue');
    });
</script>