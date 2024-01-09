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
            <h2 class="font-w600 title mb-2 mr-auto">Riwayat Diagnosis Pengguna</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>
        <!-- Isi Konten Halaman -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Riwayat Diagnosis Pengguna</h4>
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
                                        <th>Penyakit</th>
                                        <th>Persentase</th>
                                        <th>Gejala</th>
                                        <th>Kemungkinan Lain</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($riwayat as $r) :
                                    ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $r['nama']; ?></td>
                                            <td><?= $r['umur']; ?></td>
                                            <td><?= $r['jk']; ?></td>
                                            <td><?= $r['nama_penyakit']; ?></td>
                                            <td><?= substr($r['nilai'], 0, 5); ?>%</td>
                                            <td>
                                                <?php
                                                $gejala = unserialize($r['gejala']);
                                                foreach ($allG as $ag) {
                                                    $namaG[$ag['kode_gejala']] = $ag['deskripsi_gejala'];
                                                }

                                                foreach ($gejala as $key) {
                                                    $dataGejala[] = [
                                                        'kode_hasil' => $r['kode_hasil'],
                                                        'kode_gejala' => $key,
                                                        'deskripsi_gejala' => $namaG[$key]
                                                    ];
                                                }
                                                ?>
                                                <div class="form-group">
                                                    <select class="form-control default-select" id="sel1">
                                                        <option><?php for ($i = 0; $i < count($gejala); $i++) {
                                                                    echo $gejala[$i] . ", ";
                                                                } ?></option>

                                                        <?php foreach ($dataGejala as $dg) : ?>
                                                            <?php if ($dg['kode_hasil'] == $r['kode_hasil']) { ?>
                                                                <option disabled><?= $dg['deskripsi_gejala']; ?></option>
                                                            <?php } ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <?php
                                                $arpenyakit = unserialize($r['penyakit']);
                                                foreach ($allP as $ap) {
                                                    $arpykt[$ap['kode_penyakit']] = $ap['nama_penyakit'];
                                                }

                                                foreach ($arpenyakit as $key => $value) {
                                                    $dataPenyakit[] = [
                                                        'kode_hasil' => $r['kode_hasil'],
                                                        'kode_penyakit' => $key,
                                                        'nama_penyakit' => $arpykt[$key],
                                                        'nilai' => $value
                                                    ];
                                                }
                                                ?>
                                                <div class="form-group">
                                                    <select class="form-control default-select" id="sel1">
                                                        <option>
                                                            <?php
                                                            foreach ($dataPenyakit as $dps) {
                                                                if ($dps['kode_hasil'] ==  $r['kode_hasil'] && $dps['kode_penyakit'] != $r['penyakitsatu']) {
                                                                    echo $dps['kode_penyakit'] . ", ";
                                                                }
                                                            }
                                                            ?>
                                                        </option>

                                                        <?php foreach ($dataPenyakit as $dp) : ?>
                                                            <?php if ($dp['kode_hasil'] == $r['kode_hasil'] && $dp['kode_penyakit'] != $r['penyakitsatu']) { ?>
                                                                <option disabled><?= $dp['nama_penyakit']; ?> (<?= substr($dp['nilai'], 0, 5); ?>%)</option>
                                                            <?php } ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <?php
                                                $waktu = Time::parse($r['created_at'], 'Asia/Jakarta');
                                                echo $waktu->toLocalizedString('d MMMM, yyyy');
                                                ?>
                                            </td>
                                            <td>
                                                <form action="/riwayatdiagnose/hapusdiag/<?= $r['kode_hasil'] ?>" method="post">
                                                    <?php csrf_field() ?>
                                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                </form>
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