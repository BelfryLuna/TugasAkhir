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
            <h2 class="font-w600 title mb-2 mr-auto">Kelola Gejala</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Kelola Gejala</h4>
                        <div class="bootstrap-modal">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter"><span class="btn-icon"><i class="fa fa-plus"></i></span></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Kode Gejala</th>
                                        <th>Nama Gejala</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- looping untuk menampilkan data dari tabel gejala di view -->
                                    <?php foreach ($gejala as $G) : ?>
                                        <tr>
                                            <td><?= $G['kode_gejala']; ?></td>
                                            <td><?= $G['deskripsi_gejala']; ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <!-- <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> -->

                                                    <!-- button modal edit -->
                                                    <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#exampleModalCenterE<?= $G['kode_gejala']; ?>"><i class="fa fa-pencil"></i></button>

                                                    <form action="/keloladata/delgejala/<?= $G['kode_gejala']; ?>" method="post">
                                                        <button class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                    </form>

                                                    <!-- isi modal edit -->
                                                    <div class="modal fade" id="exampleModalCenterE<?= $G['kode_gejala']; ?>">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Gejala</h5>
                                                                    <button type="button" class="close closetombol" onfocus="tombolclose()" data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                                                                </div>

                                                                <!-- Untuk menambah data gejala -->
                                                                <form action="/keloladata/upgejala/<?= $G['kode_gejala']; ?>" method="post">
                                                                    <?= csrf_field(); ?>
                                                                    <div class="modal-body">
                                                                        <div class="basic-form">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12">
                                                                                    <label for="gejala">Gejala</label>
                                                                                    <input type="text" value="<?= $G['deskripsi_gejala']; ?>" class="form-control" id="gejala" placeholder="Nama Gejala" name="deskripsi_gejala" autofocus>
                                                                                    <div class="invalid-feedback">
                                                                                        <?= $validation->getError('deskripsi_gejala'); ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-danger light closetombol" onfocus="tombolclose()" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                                        </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <!-- looping untuk menampilkan data dari tabel gejala di view -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal tambah -->
    <div class="modal fade <?= session('deskgejalasalah') ? 'show' : '' ?>" style="<?= session('deskgejalasalah') ? 'padding-right: 17px; display: block;' : '' ?>" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Gejala</h5>
                    <button type="button" class="close closetombol" onfocus="tombolclose()" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>

                <!-- Untuk menambah data gejala -->
                <form action="/keloladata/savegejala" method="post">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h5>Periksa Kembali Jawaban Form</h5>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <div class="basic-form">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="gejala">Gejala</label>
                                    <input type="text" value="<?= old('deskripsi_gejala'); ?>" class="form-control <?php if (session('errors.deskripsi_gejala')) : ?>is-invalid<?php endif ?>" id="gejala" placeholder="Nama Gejala" name="deskripsi_gejala" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('deskripsi_gejala'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light closetombol" onfocus="tombolclose()" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- isi konten end -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<script>
    function tombolclose() {
        $('.closetombol').on('click', function() {
            document.getElementById("exampleModalCenter").style.display = "none";
            // document.getElementById("selectD").style.display = "block";
        })
    };
</script>

<!-- penutup pemanggilan template -->
<?= $this->endSection(); ?>