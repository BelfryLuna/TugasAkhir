<!--**********************************
            Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
                <img src="<?= base_url(); ?>/images/<?= user()->foto; ?>" alt="" />
                <a href="<?= base_url('/infoakun'); ?>"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">Hello,</span> <?= user()->username; ?></h5>
            <p class="email">
                <a href="<?= base_url(); ?>//cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f8f4e7e4e0f0efefefefd5f8f4fcf9bbf6faf8"><?= user()->email; ?></a>
            </p>
        </div>
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Menu Utama</li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Laman Utama</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= base_url('/dashboard'); ?>">Dashboard Admin</a></li>
                    <li><a href="<?= base_url('/'); ?>">Halaman Pengguna</a></li>
                </ul>
            </li>
            <li class="nav-label">Akun</li>
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="fa fa-user-circle-o"></i>
                    <span class="nav-text">Kelola Akun</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= base_url('/infoakun'); ?>">Info Akun</a></li>
                    <li><a href="<?= base_url('/kelolaakun'); ?>">Daftar Akun</a></li>
                </ul>
            </li>

            <li class="nav-label">Menu Kepakaran</li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-hospital-o"></i>
                    <span class="nav-text">Kelola Kepakaran</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= base_url('/keloladata/penyakit'); ?>">Kelola Penyakit</a></li>
                    <li><a href="<?= base_url('/keloladata/gejala'); ?>">Kelola Gejala</a></li>
                    <li><a href="<?= base_url('/keloladata/baspengetahuan'); ?>">Basis Pengetahuan</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('/riwayatdiagnose'); ?>" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-stethoscope"></i>
                    <span class="nav-text">Riwayat Diagnosis</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/blog'); ?>" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-bookmark-o"></i>
                    <span class="nav-text">Website Blog</span>
                </a>
            </li>

            <li class="nav-label">Pengembang</li>
            <li>
                <a href="<?= base_url('/pengembang'); ?>" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-user-md"></i>
                    <span class="nav-text">Kelola Pengembang</span>
                </a>
            </li>

            <li class="nav-label">UAT</li>
            <li>
                <a href="<?= base_url('/kuisioner'); ?>" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-044-file"></i>
                    <span class="nav-text">Kuisioner UAT</span>
                </a>
            </li>
        </ul>
        <div class="copyright">
            <p>
                <strong>Sobat Lambung Admin Dashboard</strong> © 2023
            </p>
            <p class="fs-12">
                Developed <span class="heart"></span> by M. Sonny Irsan Syahputra
            </p>
        </div>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->