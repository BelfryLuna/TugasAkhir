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
        <div class="form-head mb-sm-5 d-flex flex-wrap align-items-center">
            <h2 class="font-w600 title mr-auto">Basis Pengetahuan</h2>
            <a href="javascript:void(0);" class="btn btn-secondary"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>>
        <!-- konten utama start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h4 class="card-title">Basis Pengetahuan</h4>
                        <p class="m-0 subtitle">Relasi Antara Gejala dan Penyakit Diagnosa Awal Penyakit Lambung</p>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="card transparent-card">
                            <div class="card-body">
                                <?php foreach ($penyakit as $S) : ?>
                                    <div id="accordion-ten" class="accordion accordion-header-shadow accordion-rounded">
                                        <div class="accordion__item">
                                            <div class="accordion__header collapsed accordion__header--primary mb-2" data-toggle="collapse" data-target="#header-shadow_collapseOne<?= $S['kode_penyakit']; ?>">
                                                <span class="accordion__header--icon"></span>
                                                <span class="accordion__header--text"><?= $S['nama_penyakit']; ?></span>
                                                <span class="accordion__header--indicator"></span>
                                            </div>
                                            <div id="header-shadow_collapseOne<?= $S['kode_penyakit']; ?>" class="collapse accordion__body <?= $S['kode_penyakit'] == $penyakit[0]['kode_penyakit'] ? 'show' : '' ?>" data-parent="#accordion-ten">
                                                <div class="accordion__body--text">
                                                    <div class="basic-form">
                                                        <?php foreach ($basisp as $P) : ?>
                                                            <?php if ($S['kode_penyakit'] == $P['kode_penyakit']) { ?>

                                                                <div class="form-row mb-2">
                                                                    <div class="col-sm-2">
                                                                        <input type="text" class="form-control" placeholder="<?= $P['kode_gejala']; ?>">
                                                                    </div>
                                                                    <div class="col-sm-9 mt-2 mt-sm-0">
                                                                        <input type="text" class="form-control" placeholder="<?= $P['deskripsi_gejala']; ?>">
                                                                    </div>
                                                                    <div class="col-sm-1 mt-2 mt-sm-0">
                                                                        <form action="/keloladata/hapusbaspengetahuan/<?= $P['kode_pengetahuan']; ?>" method="post">
                                                                            <button type="submit" class="btn btn-danger"> <span class="btn-icon"><i class="fa fa-trash"></i></span>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            <?php } ?>
                                                        <?php endforeach; ?>

                                                        <div class="card col-11">
                                                            <div class="card-body">
                                                                <h5>Pilih dan Tambahkan Gejala:</h5>
                                                                <form action="/keloladata/savebaspengetahuan" method="post">
                                                                    <?= csrf_field(); ?>
                                                                    <div class="form-row">
                                                                        <div class="col-sm-1">
                                                                            <button type="submit" class="btn btn-primary"> <span class="btn-icon"><i class="fa fa-plus"></i></span>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <input type="hidden" value="<?= $S['kode_penyakit']; ?>" name="kode_penyakit">
                                                                            <select class="multi-select" name="kode_gejala[]" multiple="multiple" required>
                                                                                <?php foreach ($gejala as $G) : ?>
                                                                                    <option value="<?= $G['kode_gejala']; ?>"><?= $G['deskripsi_gejala']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
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
                                <?php endforeach; ?>
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