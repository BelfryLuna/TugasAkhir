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
            <h2 class="font-w600 title mb-2 mr-auto">Tambah Akun</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>
        <!-- konten utama -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Tambah Akun</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <form class="form-valide-with-icon" action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="foto" value="defaultUser.jpg">
                                <div class="form-group">
                                    <label class="text-label" for="fullname">Fullname</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-user-circle-o"></i> </span>
                                        </div>
                                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter a fullname..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="username">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        </div>
                                        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" name="username" placeholder="Enter a username..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" <?=lang('Auth.email')?> for="email123">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                        </div>
                                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email123" name="email" placeholder="Enter a email..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="password">Password </label>
                                    <div class="input-group transparent-append">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                        </div>
                                        <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" name="password" placeholder="Choose a safe one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-label" for="password2">Confirm Password </label>
                                    <div class="input-group transparent-append">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                        </div>
                                        <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="password2" name="pass_confirm" placeholder="confirm it..">
                                    </div>
                                </div>
                                <button type="submit" class="btn mt-3 mr-2 btn-primary">Submit</button>
                                <button type="reset" class="btn mt-3 mr-2 btn-warning">Reset</button>
                                <a href="<?= base_url('/kelolaakun'); ?>" class="btn mt-3 btn-danger">Kembali</a>
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