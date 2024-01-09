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
            <h2 class="font-w600 title mb-2 mr-auto">Tambah Data Penyakit</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>
        <!-- Isi Konten Halaman -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Tambah Data Penyakit</h4>
                        </button>
                    </div>
                    <div class="card-body">
                        <?php if (!empty(session()->getFlashdata('gagal'))) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h5>Periksa Kembali Jawaban Form</h5>
                                </hr />
                                <?php echo session()->getFlashdata('gagal'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <div class="basic-form">
                            <form class="form-valide-with-icon" action="/keloladata/penyakit/savepenyakit" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label class="text-label" for="penyakit">Nama Penyakit</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control <?php if (session('errors.nama_penyakit')) : ?>is-invalid<?php endif ?>" id="penyakit" name="nama_penyakit">
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="username">Deskripsi Penyakit</label>
                                    <div class="input-group">
                                        <div class="containerck">
                                            <textarea id="editor" name="desk"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="username">Solusi Pengobatan</label>
                                    <div class="input-group">
                                        <div class="containerck">
                                            <textarea id="editor2" name="pengobatan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="username">Solusi Pencegahan</label>
                                    <div class="input-group">
                                        <div class="containerck">
                                            <textarea id="editor3" name="pencegahan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="foto">jenis Obat</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar')) : ?>is-invalid<?php endif ?>" name="gambar" id="foto" onchange="previewImg()">

                                        <label for="customFile" class="custom-file-label">Tambahkan Gambar Obat</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="foto2">jenis Obat 2</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar2')) : ?>is-invalid<?php endif ?>" name="gambar2" id="foto2" onchange="previewImage()">

                                        <label for="customFile" class="custom-file-label">Tambahkan Gambar Obat</label>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="foto3">jenis Obat 3</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar3')) : ?>is-invalid<?php endif ?>" name="gambar3" id="foto3" onchange="previewImgages()">
                                       
                                        <label for="customFile" class="custom-file-label">Tambahkan Gambar Obat</label>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="foto4">jenis Obat 4</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar4')) : ?>is-invalid<?php endif ?>" name="gambar4" id="foto4" onchange="previewImagess()">
                                        
                                        <label for="customFile" class="custom-file-label">Tambahkan Gambar Obat</label>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="foto5">jenis Obat 5</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar5')) : ?>is-invalid<?php endif ?>" name="gambar5" id="foto5" onchange="previewImag()">
                                        
                                        <label for="customFile" class="custom-file-label">Tambahkan Gambar Obat</label>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="foto6">jenis Obat 6</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar6')) : ?>is-invalid<?php endif ?>" name="gambar6" id="foto6" onchange="previewImagesa()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar6'); ?>
                                        </div>
                                        <label for="customFile" class="custom-file-label">Tambahkan Gambar Obat</label>

                                    </div>
                                </div>
                                <button type="submit" class="btn mt-3 mr-2 text-right btn-primary">Submit</button>
                                <button type="reset" class="btn mt-3 mr-2 text-right btn-warning">Reset</button>
                                <a href="<?= base_url('/keloladata/penyakit'); ?>" class="btn mt-3 text-right btn-danger">Kembali</a>

                            </form>
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