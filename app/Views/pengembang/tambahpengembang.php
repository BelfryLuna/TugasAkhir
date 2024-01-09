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
            <h2 class="font-w600 title mb-2 mr-auto">Edit Data Penyakit</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
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
                            <form class="form-valide-with-icon" action="/pengembang/savepengembang" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label class="text-label" for="penyakit">Nama</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control <?php if (session('errors.nama')) : ?>is-invalid<?php endif ?>" id="penyakit" name="nama">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="username">Status</label>
                                    <div class="input-group">
                                        <div class="form-group mb-0 d-inline">
                                            <label class="radio-inline mr-3"><input type="radio" name="status" value="Developer"> Developer</label>
                                            <label class="radio-inline mr-3"><input type="radio" name="status" value="Dosen Pembimbing"> Dosen Pembimbing </label>
                                            <label class="radio-inline mr-3"><input type="radio" name="status" value="Dokter Spesialis Penyakit Dalam"> Dokter Spesialis Penyakit Dalam </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Upload Foto</label>
                                    <div class="input-group">
                                        <input type="file" name="foto" class="custom-file-input <?php if (session('errors.foto')) : ?>is-invalid<?php endif ?>" id="foto">
                                        <label for="customFile" class="custom-file-label">Tambahkan Foto Pengembang</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn mt-3 mr-2 btn-primary">Submit</button>
                                <button type="reset" class="btn mt-3 mr-2 btn-warning">Reset</button>
                                <a href="<?= base_url('/pengembang'); ?>" class="btn mt-3 btn-danger">Kembali</a>
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