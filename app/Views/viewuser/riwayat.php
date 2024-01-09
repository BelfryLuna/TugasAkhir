<!-- untuk manggil isi template -->
<?= $this->extend('layoutuser/templateuser'); ?>
<?= $this->section('content'); ?><!-- isi -->

<?php

use CodeIgniter\I18n\Time;
?>

<!-- Datatable -->
<link href="<?= base_url(); ?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<!-- Custom Stylesheet template admin-->
<link href="<?= base_url(); ?>/css/style2.css" rel="stylesheet" />
<!-- css asli -->
<link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet" />
<!-- Responsive-Style-link -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/responsive.css">

<!-- How-It-Workes-Section-Start -->
<section class="row_am how_it_works" id="how_it_work">
    <!-- container start -->
    <div class="container">
        <div class="anim_line">
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
            <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
        </div>
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2>Riwayat <span>Diagnosis</span> Awal</h2>
            <!-- p -->
            <p>Berikut adalah riwayat diagnosis Anda<br> Halaman ini memuat diagnosis yang telah Anda lakukan beserta pengguna lainnya.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No </th>
                                        <th>Nama </th>
                                        <th>Jenis Kelamin </th>
                                        <th>Usia </th>
                                        <th>Penyakit </th>
                                        <th>Persentase </th>
                                        <th>Tanggal </th>
                                        <th>Aksi </th>
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
                                            <td><?= $r['jk']; ?></td>
                                            <td><?= $r['umur']; ?></td>
                                            <td><span class="badge light badge-secondary">
                                                    <i class="fa fa-circle text-secondary mr-1"></i>
                                                    <?= $r['nama_penyakit']; ?>
                                                </span></td>
                                            <td><span class="badge light badge-secondary"><?= substr($r['nilai'], 0, 5); ?>%</span></td>
                                            <td>
                                                <?php
                                                $time = Time::parse($r['created_at'], 'Asia/Jakarta');
                                                echo $time->toLocalizedString('d MMMM, yyyy');
                                                ?>
                                            </td>
                                            <td>
                                                <a target="_blank" href="/riwayat/<?= $r['kode_hasil']; ?>" class="btn btn-secondary shadow btn-xs mr-1"><i class="fa fa-eye"></i> Detail</a>
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
</section>
<!-- How-It-Workes-Section-end -->


<?= $this->endSection(); ?>