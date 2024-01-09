<!-- untuk manggil isi template -->
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<?php

use CodeIgniter\I18n\Time;

$time = Time::parse(user()->created_at, 'Asia/Jakarta');
$time2 = Time::parse('Asia/Jakarta');

?>

<!-- isi konten start -->
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
            <h2 class="font-w600 title mb-2 mr-auto">Info Akun</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time2->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>

        <!-- konten utama start -->
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card user-card">
                            <div class="card-body pb-0">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="dz-media mr-3 rounded-circle">
                                        <img src="<?= base_url(); ?>/images/<?= user()->foto; ?>" name="foto" alt="">
                                    </div>
                                    <div>
                                        <h5 class="title"><a href="javascript:void(0);"><?= user()->username; ?></a></h5>
                                        <span class="text-info">Admin</span>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <span class="mb-0 title">Nama</span> :
                                        <span class="text-black ml-2"><a><?= user()->fullname; ?></a></span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="mb-0 title">Email</span> :
                                        <span class="text-black ml-2"><?= user()->email; ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="mb-0 title">Admin Sejak</span> :
                                        <span class="text-black desc-text ml-2"><?= $time->toLocalizedString('MMMM d, yyyy'); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bd-example-modal-sm">View Full Photo</button>
                                </div>
                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content" style="border-radius: 5%;">
                                            <!-- <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div> -->
                                            <div class="modal-body">
                                                <div class="media style-1">
                                                    <img src="<?= base_url(); ?>/images/<?= user()->foto; ?>" name="foto" style="width:100%;">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link <?php if (session('isEdit')) { ?>msnmsn<?php } elseif (session('isChangePw')) { ?>scs<?php } else { ?>active<?php } ?>" data-toggle="tab" href="#home8">
                                    <span>
                                        <i class="ti-user"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= session('isChangePw') ? 'active' : '' ?>" data-toggle="tab" href="#profile8">
                                    <span>
                                        <i class="ti-lock"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane fade <?php if (session('isEdit')) { ?>nbadmnasbd<?php } elseif (session('isChangePw')) { ?>snfsnff<?php } else { ?>show active<?php } ?>" id="home8" role="tabpanel">
                                <div class="pt-4">
                                    <h4 class="card-title">Edit Informasi Akun</h4>
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
                                        <form action="/infoakun/update" method="post" enctype="multipart/form-data">
                                            <?php csrf_field() ?>
                                            <input type="hidden" name="fotoLama" value="<?= user()->foto; ?>">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Fullname</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" id="fullname" name="fullname" value="<?= user()->fullname; ?>" placeholder="<?= $validation->getError('fullname'); ?>">
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('fullname'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="username">Username</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" name="username" value="<?= user()->username; ?>" placeholder="<?= $validation->getError('username'); ?>">
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nama_penyakit'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="email">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email" name="email" value="<?= user()->email; ?>" placeholder="<?= $validation->getError('email'); ?>">
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('email'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="foto">Foto</label>
                                                <div class="col-sm-9">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input <?php if (session('errors.foto')) : ?>is-invalid<?php endif ?>" id="foto" name="foto" value="<?= user()->foto; ?>" placeholder="<?= $validation->getError('foto'); ?>" onchange="previewImg()">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('foto'); ?>
                                                        </div>
                                                        <label class="custom-file-label"><?= user()->foto; ?></label>
                                                        <img src="<?= base_url(); ?>/images/<?= user()->foto; ?>" class="img-thumbnail img-preview mt-3" style="height: 110px; width: 120px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12  text-right mt-5">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                            <!-- belum -->
                            <div class="tab-pane fade <?= session('isChangePw') ? 'show active' : '' ?>" id="profile8" role="tabpanel">
                                <div class="pt-4">

                                    <h4 class="card-title">Change Account Password</h4>
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
                                    <div class="basic-form mt-3">
                                        <form action="/infoakun/updatePassword/<?= user()->id; ?>" method="post">
                                            <?php csrf_field() ?>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Password Lama</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control <?php if (session('errors.password_lama')) : ?>is-invalid<?php endif ?>" name="password_lama" placeholder="<?php if (!$validation->getError('password_lama')) { ?>Password Sekarang<?php } else { ?><?= $validation->getError('password_lama'); ?><?php } ?> <?= $validation->getError('verify'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Password Baru</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control <?php if (session('errors.password_baru')) : ?>is-invalid<?php endif ?>" name="password_baru" placeholder="<?php if (!$validation->getError('password_baru')) { ?>Password Baru<?php } else { ?><?= $validation->getError('password_baru'); ?><?php } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control <?php if (session('errors.konfirm_password')) : ?>is-invalid<?php endif ?>" name="konfirm_password" placeholder="<?php if (!$validation->getError('konfirm_password')) { ?>Repeat Password Baru<?php } else { ?><?= $validation->getError('konfirm_password'); ?><?php } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 text-right mt-3">
                                                    <button type="submit" class="btn btn-primary">Update Password</button>
                                                </div>
                                            </div>
                                        </form>

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

<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const fotoLabel = document.querySelector('.form-control');
        const imgPreview = document.querySelector('.img-preview');

        fotoLabel.textContent = foto.files[0].name;

        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(foto.files[0]);

        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>


<!-- penutup pemanggilan template -->
<?= $this->endSection(); ?>