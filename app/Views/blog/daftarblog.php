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
            <h2 class="font-w600 title mb-2 mr-auto">Blog</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Daftar Blog</h4>
                        <a href="<?= base_url('/blog/tambahblog'); ?>" class="btn btn-primary"><span class="btn-icon"><i class="fa fa-plus"></i></span></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($blog as $B) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $B['judul']; ?></td>
                                            <td><?= $B['kategori']; ?></td>
                                            <!-- <'name'> -->
                                            <td>
                                                <div class="d-flex">
                                                    <div class="d-flex">
                                                        <a href="/blog/detailblog/<?= $B['id']; ?>" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                                        <a href="/blog/editblog/<?= $B['id']; ?>" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

                                                        <form action="/blog/hapusblog/<?= $B['id']; ?>" method="post">
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