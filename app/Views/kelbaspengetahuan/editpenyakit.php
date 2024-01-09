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
                        <h4 class="card-title">Form Edit Data Penyakit</h4>
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
                            <form class="form-valide-with-icon" action="/keloladata/penyakit/uppenyakit/<?= $penyakit['kode_penyakit']; ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="gambarlama" value="<?= $penyakit['gambar']; ?>">
                            <input type="hidden" name="gambarlama2" value="<?= $penyakit['gambar2']; ?>">
                            <input type="hidden" name="gambarlama3" value="<?= $penyakit['gambar3']; ?>">
                            <input type="hidden" name="gambarlama4" value="<?= $penyakit['gambar4']; ?>">
                            <input type="hidden" name="gambarlama5" value="<?= $penyakit['gambar5']; ?>">
                            <input type="hidden" name="gambarlama6" value="<?= $penyakit['gambar6']; ?>">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label class="text-label" for="penyakit">Nama Penyakit</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control <?php if (session('errors.nama_penyakit')) : ?>is-invalid<?php endif ?>" id="penyakit" name="nama_penyakit" value="<?= $penyakit['nama_penyakit']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="username">Deskripsi Penyakit</label>
                                    <div class="input-group">
                                        <div class="containerck">
                                            <textarea id="editor" name="desk"><?= (old('desk')) ? old('desk') : $penyakit['desk'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="username">Solusi Pengobatan</label>
                                    <div class="input-group">
                                        <div class="containerck">
                                            <textarea id="editor2" name="pengobatan"><?= (old('pengobatan')) ? old('pengobatan') : $penyakit['pengobatan'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="username">Solusi Pencegahan</label>
                                    <div class="input-group">
                                        <div class="containerck">
                                            <textarea id="editor3" name="pencegahan"><?= (old('pencegahan')) ? old('pencegahan') : $penyakit['pencegahan'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Jenis Obat</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar')) : ?>is-invalid<?php endif ?>" name="gambar" id="gambar" onchange="previewImg()">
                                        <label for="customFile" class="custom-file-label"><?= $penyakit['gambar']; ?></label>
                                        
                                    </div>
                                </div>
                                 <div class="form-group">
                                     <label class="text-label">Jenis Obat 2</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar2')) : ?>is-invalid<?php endif ?>" name="gambar2" id="customFile2" onchange="previewImg()">
                                        <label for="customFile2" class="custom-file-label"><?= $penyakit['gambar2']; ?></label>
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                     <label class="text-label">Jenis Obat 3</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar3')) : ?>is-invalid<?php endif ?>" name="gambar3" id="customFile3" onchange="previewImg()">
                                        <label for="customFile3" class="custom-file-label"><?= $penyakit['gambar3']; ?></label>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                     <label class="text-label">Jenis Obat 4</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar4')) : ?>is-invalid<?php endif ?>" name="gambar4" id="customFile4" onchange="previewImg()">
                                        <label for="customFile4" class="custom-file-label"><?= $penyakit['gambar4']; ?></label>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                     <label class="text-label">Jenis Obat 5</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar5')) : ?>is-invalid<?php endif ?>" name="gambar5" id="customFile5" onchange="previewImg()">
                                        <label for="customFile5" class="custom-file-label"><?= $penyakit['gambar5']; ?></label>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                     <label class="text-label">Jenis Obat 6</label>
                                    <div class="input-group">
                                        <input type="file" class="custom-file-input <?php if (session('errors.gambar6')) : ?>is-invalid<?php endif ?>" name="gambar6" id="customFile6" onchange="previewImg()">
                                        <label for="customFile6" class="custom-file-label"><?= $penyakit['gambar6']; ?></label>
                                       
                                    </div>
                                </div>
                                <button type="submit" class="btn mt-3 mr-2 btn-primary">Submit</button>
                                <button type="reset" class="btn mt-3 mr-2 btn-warning">Reset</button>
                                <a href="<?= base_url('/keloladata/penyakit'); ?>" class="btn mt-3 btn-danger">Kembali</a>
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