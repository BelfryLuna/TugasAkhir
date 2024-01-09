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
            <h2 class="font-w600 title mb-2 mr-auto">Daftar Pengembang Sistem Pakar</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Daftar Pengembang</h4>
                        <!-- <a href="<?= base_url('/pengembang/tambahpengembang'); ?>" class="btn btn-secondary"><span class="btn-icon"><i class="fa fa-plus"></i></span></a> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pengembang as $A) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td>
                                                <div class="media style-1">
                                                    <img class="img-fluid mr-2" src="<?= base_url(); ?>/images/<?= $A['foto']; ?>">
                                                </div>
                                            </td>
                                            <td><?= $A['nama']; ?></td>
                                            <td><?= $A['status']; ?></td>
                                            <!-- <'name'> -->
                                            <td>
                                                <div class="d-flex">
                                                    <div class="d-flex">
                                                        <form action="/pengembang/hapuspengembang/<?= $A['id']; ?>" method="post">
                                                        <?= csrf_field(); ?>
                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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