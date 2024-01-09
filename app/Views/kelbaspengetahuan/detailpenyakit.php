<!-- untuk manggil isi template -->
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- isi konten start -->

<?php 
use CodeIgniter\I18n\Time;

$time = Time::parse('Asia/Jakarta');
?> 



<div class="content-body">
    <!-- <div class="form-head" style="background-image:url('images/background/bg3.jpg');background-position: bottom; ">
				<div class="container max d-flex align-items-center mt-0">
					<h2 class="font-w600 title text-white mb-2 mr-auto ">Dashboard</h2>
					<div class="weather-btn mb-2">
						<span class="mr-3 font-w600 text-black"><i class="fa fa-cloud mr-2"></i>21</span>
						<select class="form-control style-1 default-select  mr-3 ">
							<option>Medan, IDN</option>
							<option>Jakarta, IDN</option>
							<option>Surabaya, IDN</option>
						</select>
					</div>
					<a href="javascript:void(0);" class="btn white-transparent mb-2"><i class="las la-calendar scale5 mr-3"></i>Filter Periode</a>
				</div>
			</div> -->
    <div class="container-fluid">
        <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
            <h2 class="font-w600 title mb-2 mr-auto">Detail Penyakit</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>
        <!-- Isi Konten Halaman -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4 class="card-title">Tabel Kelola Penyakit</h4>
                        <a href="" class="btn btn-secondary">Tambah Penyakit <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
                        </button>
                    </div> -->
                    <div class="card-body">
                        <h2 class="fs-20 text-black"><?= $detail_p['nama_penyakit']; ?></h2>
                        <br>
                        <h5 class="text-black">Deskripsi Penyakit:</h5>
                        <p class="mb-2"><?= $detail_p['desk']; ?></p>
                    </div>
                </div>
            </div>
            <!-- card jenis obat -->
            <div class="col-xl-3 col-xxl-4">
                <div class="swiper-box">
                    <div class="swiper-container card-swiper">
                        <div class="swiper-wrapper">
                            <!-- per obat -->
                            <div class="swiper-slide">
                                <h5 class="text-black">Jenis Obat:</h5>
                                <div class="card-bx stacked card">
                                    <!-- masukin gambar -->
                                    <img src="<?= base_url(); ?>/images/<?= $detail_p['gambar']; ?>" name="gambar" alt="">
                                    <!-- masukin keterangan atas-->
                                    <div class="card-info">
                                        <p class="mb-1 text-white fs-14">Antasida (Simptomatik)</p>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="num-text text-white mb-5 font-w600">Promag</h2>
                                             <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                            </svg>
                                        </div>
                                        <!-- masukin keterangan -->
                                        <div class="d-flex">
                                            <div class="mr-4 text-white">
                                                <p class="fs-12 mb-1 op6"> </p>
                                                <span> </span>
                                                <br>
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- per obat 2 -->
                            <div class="swiper-slide">
                                <div class="card-bx stacked card">
                                    <!-- masukin gambar -->
                                    <img src="<?= base_url(); ?>/images/<?= $detail_p['gambar2']; ?>" name="gambar2" alt="">
                                    <!-- masukin keterangan atas -->
                                    <div class="card-info">
                                        <p class="fs-14 mb-1 text-white">Suplemen Probiotik</p>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="num-text text-white mb-5 font-w600">Interlac</h2>
                                            <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                            </svg>
                                        </div>
                                        <!-- masukin keterangan bawah -->
                                        <div class="d-flex">
                                            <div class="mr-4 text-white">
                                                <p class="fs-12 mb-1 op6"> </p>
                                                <span> </span>
                                                <br>
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- per obat 4 -->
                            <div class="swiper-slide">
                                <div class="card-bx stacked card">
                                    <!-- masukin gambar -->
                                    <img src="<?= base_url(); ?>/images/<?= $detail_p['gambar4']; ?>" name="gambar4" alt="">
                                    <!-- masukin keterangan atas -->
                                    <div class="card-info">
                                        <p class="fs-14 mb-1 text-white">Prokinetik (Simptomatik)</p>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="num-text text-white mb-5 font-w600">Domperidone</h2>
                                            <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                            </svg>
                                        </div>
                                        <!-- masukin keterangan bawah -->
                                        <div class="d-flex">
                                            <div class="mr-4 text-white">
                                                <p class="fs-12 mb-1 op6"> </p>
                                                <span> </span>
                                                <br>
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- per obat 5 -->
                            <div class="swiper-slide">
                                <div class="card-bx stacked card">
                                    <!-- masukin gambar -->
                                    <img src="<?= base_url(); ?>/images/<?= $detail_p['gambar5']; ?>" name="gambar5" alt="">
                                    <!-- masukin keterangan atas -->
                                    <div class="card-info">
                                        <p class="fs-14 mb-1 text-white">H2 Antagonis (Teurapetik)</p>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="num-text text-white mb-5 font-w600">Ranitidine</h2>
                                            <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                            </svg>
                                        </div>
                                        <!-- masukin keterangan bawah -->
                                        <div class="d-flex">
                                            <div class="mr-4 text-white">
                                                <p class="fs-12 mb-1 op6"> </p>
                                                <span> </span>
                                                <br>
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- per obat 6 -->
                            <div class="swiper-slide">
                                <div class="card-bx stacked card">
                                    <!-- masukin gambar -->
                                    <img src="<?= base_url(); ?>/images/<?= $detail_p['gambar6']; ?>" name="gambar6" alt="">
                                    <!-- masukin keterangan atas -->
                                    <div class="card-info">
                                        <p class="fs-14 mb-1 text-white">PPI (teurapetik)</p>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="num-text text-white mb-5 font-w600">Omeprazole<br>Lansoprazole</h2>
                                            <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                            </svg>
                                        </div>
                                        <!-- masukin keterangan bawah -->
                                        <div class="d-flex">
                                            <div class="mr-4 text-white">
                                                <p class="fs-12 mb-1 op6"> </p>
                                                <span> </span>
                                                <br>
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- per obat 7 -->
                            <div class="swiper-slide">
                                <div class="card-bx stacked card">
                                    <!-- masukin gambar -->
                                    <img src="<?= base_url(); ?>/images/<?= $detail_p['gambar3']; ?>" name="gambar7" alt="">
                                    <!-- masukin keterangan atas -->
                                    <div class="card-info">
                                        <p class="fs-14 mb-1 text-white">Antibiotik</p>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="num-text text-white mb-5 font-w600">Metronidazole<br>Amoksilin</h2>
                                            <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                                <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                            </svg>
                                        </div>
                                        <!-- masukin keterangan bawah -->
                                        <div class="d-flex">
                                            <div class="mr-4 text-white">
                                                <p class="fs-12 mb-1 op6"> </p>
                                                <span> </span>
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Scroll Bar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>

            <!-- solusi penjelasan pengobatan dan pencegahan -->
            <div class="col-xl-9 col-xxl-8">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="default-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home"><i class="la la-home mr-2"></i> Pengobatan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile"><i class="la la-user mr-2"></i> Pencegahan</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                                            <div class="pt-4">
                                                <h4>Solusi Pengobatan:</h4>
                                                <p><?= $detail_p['pengobatan']; ?></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <div class="pt-4">
                                                <h4>Solusi Pencegahan:</h4>
                                                <p><?= $detail_p['pencegahan']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- isi konten end -->

<!-- penutup pemanggilan template -->
<?= $this->endSection(); ?>