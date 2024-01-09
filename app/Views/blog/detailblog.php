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
            <h2 class="font-w600 title mb-2 mr-auto">Detail Blog</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                       <div class="post-details">
									<h3 class="mb-2 text-black"><?= $detail_b['judul']; ?></h3>
									<ul class="mb-4 post-meta d-flex flex-wrap">
										<li class="post-author mr-3">Kategori : <span><a href="javascript:void(0)" class="badge badge-rounded badge-light"><?= $detail_b['kategori']; ?></a></span></i></li>
									</ul>
									<img src="<?= base_url(); ?>/images/<?= $detail_b['foto']; ?>" name="foto" alt="" class="img-fluid mb-3 w-100">
									<p><?= $detail_b['content']; ?></p>
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