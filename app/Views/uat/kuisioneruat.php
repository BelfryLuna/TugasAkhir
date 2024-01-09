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
            <h2 class="font-w600 title mb-2 mr-auto">Kuisioner UAT</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>
        <!-- Isi Konten Halaman -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Kuisioner UAT</h4>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Usia</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jawaban Kuisioner</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i = 1;
                                foreach($datakuis as $a) :
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $a['nama']; ?></td>
                                        <td><?= $a['umur']; ?></td>
                                        <td><?= $a['jk']; ?></td>
                                        <td>
                                            <?php 
                                            $jawaban = unserialize($a['uat']);
                                            foreach($pertanyaan as $pt) {
                                                $namaG[$pt['id']] = $pt['text'];
                                            }

                                            foreach ($jawaban as $key) {
                                                $hasilkuis[] = [
                                                    'id_kuis' => $a['id'],
                                                    'hasilj' => $key['jwb'],
                                                    'pkuis' => $namaG[$key['idp']]
                                                ];
                                            }
                                            ?>
                                            <div class="form-group">
                                                <select class="form-control default-select" id="sel1">
                                                    <option>Jawaban kuisioner UAT</option>
                                                    
                                                    <?php foreach($hasilkuis as $hk) : ?>
                                                    <?php if ($hk['id_kuis'] == $a['id']) { ?>
                                                        <option disabled><?= $hk['pkuis']; ?> (<?= $hk['hasilj']; ?>)</option>
                                                    <?php } ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <?php
                                            $waktu = Time::parse($a['created_at'], 'Asia/Jakarta');
                                            echo $waktu->toLocalizedString('d MMMM, yyyy');
                                            ?>
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