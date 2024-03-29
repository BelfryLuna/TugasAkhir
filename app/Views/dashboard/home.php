<!-- untuk manggil isi template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php

use CodeIgniter\I18n\Time;

$time = Time::parse('Asia/Jakarta');
?>

<!-- isi dashboard utama -->
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
            <h2 class="font-w600 title mb-2 mr-auto">Dashboard</h2>
            <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-2"></i><?= $time->toLocalizedString('d MMMM yyyy'); ?></a>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <svg class="mb-3 currency-icon" width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-full w-full" id="iconWithBackground">
                            <rect id="r4" width="512" height="512" x="0" y="0" rx="256" fill="#7954a6" stroke="#000000" stroke-width="0" stroke-opacity="100%" paint-order="stroke"></rect>
                            <defs>
                                <linearGradient id="linearGradient" gradientUnits="userSpaceOnUse" gradientTransform="rotate(0)" style="transform-origin: center center;">
                                    <stop stop-color="#8e2de2"></stop>
                                    <stop offset="1" stop-color="#4a00e0"></stop>
                                </linearGradient>
                                <radialGradient id="glare" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(256) rotate(90) scale(512)">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </radialGradient>
                                <clipPath id="clip">
                                    <use xlink:href="#r4"></use>
                                </clipPath>
                            </defs><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" x="128" y="128" class="iconify iconify--mdi" width="256" height="256" viewBox="0 0 24 24" style="color: rgb(255, 255, 255);">
                                <path fill="currentColor" d="M19 8c.56 0 1 .43 1 1a1 1 0 0 1-1 1c-.57 0-1-.45-1-1c0-.57.43-1 1-1M2 2v9c0 2.96 2.19 5.5 5.14 5.91c.62 3.01 3.28 5.09 6.36 5.09a6.5 6.5 0 0 0 6.5-6.5v-3.69c1.16-.42 2-1.52 2-2.81a3 3 0 0 0-3-3a3 3 0 0 0-3 3c0 1.29.84 2.4 2 2.81v3.6c0 2.5-2 4.5-4.5 4.5c-2 0-3.68-1.21-4.28-3.01C12 16.3 14 13.8 14 11V2h-4v3h2v6a4 4 0 0 1-4 4a4 4 0 0 1-4-4V5h2V2H2Z"></path>
                            </svg>
                        </svg>
                        <circle cx="40" cy="40" r="40" fill="white"></circle>
                        <path d="M40.725 0.00669178C18.6241 -0.393325 0.406678 17.1907 0.00666126 39.275C-0.393355 61.3592 17.1907 79.5933 39.2749 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8092 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17362 57.3257 7.50697 39.4083C7.82365 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8096 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z" fill="#00ADA3"></path>
                        <path d="M40.5283 10.8305C24.4443 10.5471 11.1271 23.3976 10.8438 39.4816C10.5438 55.549 23.3943 68.8662 39.4783 69.1662C55.5623 69.4495 68.8795 56.599 69.1628 40.5317C69.4462 24.4477 56.6123 11.1305 40.5283 10.8305ZM40.0033 19.1441L49.272 35.6798L40.8133 30.973C40.3083 30.693 39.6966 30.693 39.1916 30.973L30.7329 35.6798L40.0033 19.1441ZM40.0033 60.8509L30.7329 44.3152L39.1916 49.022C39.4433 49.162 39.7233 49.232 40.0016 49.232C40.28 49.232 40.56 49.162 40.8117 49.022L49.2703 44.3152L40.0033 60.8509ZM40.0033 45.6569L29.8296 39.9967L40.0033 34.3364L50.1754 39.9967L40.0033 45.6569Z" fill="#00ADA3"></path>
                        </svg>
                        <h2 class="text-black mb-2 font-w600">Pengguna</h2>
                        <p class="mb-0 fs-14">
                            <span class="text-secondary mr-1">Sebanyak <strong><?= $diag['kode_hasil']; ?></strong></span> <br>
                            Pengguna telah menggunakan fitur diagnosa
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <svg class="mb-3 currency-icon" width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-full w-full" id="iconWithBackground">
                            <rect id="r4" width="512" height="512" x="0" y="0" rx="256" fill="#4c0577" stroke="#000000" stroke-width="0" stroke-opacity="100%" paint-order="stroke"></rect>
                            <defs>
                                <linearGradient id="linearGradient" gradientUnits="userSpaceOnUse" gradientTransform="rotate(0)" style="transform-origin: center center;">
                                    <stop stop-color="#8e2de2"></stop>
                                    <stop offset="1" stop-color="#4a00e0"></stop>
                                </linearGradient>
                                <radialGradient id="glare" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(256) rotate(90) scale(512)">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </radialGradient>
                                <clipPath id="clip">
                                    <use xlink:href="#r4"></use>
                                </clipPath>
                            </defs><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" x="128" y="128" class="iconify iconify--icon-park-outline" width="256" height="256" viewBox="0 0 48 48" style="color: rgb(255, 255, 255);">
                                <g fill="none" stroke="currentColor" stroke-width="4">
                                    <path stroke-linejoin="round" d="M41 17H7a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h34a2 2 0 0 0 2-2V19a2 2 0 0 0-2-2ZM34 7H14v10h20V7Z"></path>
                                    <path stroke-linecap="round" d="M19 29h10m-5-5v10"></path>
                                </g>
                            </svg>
                        </svg>
                        <circle cx="40" cy="40" r="40" fill="white"></circle>
                        <path d="M40 0C17.9083 0 0 17.9083 0 40C0 62.0917 17.9083 80 40 80C62.0917 80 80 62.0917 80 40C80 17.9083 62.0917 0 40 0ZM40 72.5C22.0783 72.5 7.5 57.92 7.5 40C7.5 22.08 22.0783 7.5 40 7.5C57.9217 7.5 72.5 22.0783 72.5 40C72.5 57.9217 57.92 72.5 40 72.5Z" fill="#FFAB2D"></path>
                        <path d="M42.065 41.2983H36.8133V49.1H42.065C43.125 49.1 44.1083 48.67 44.7983 47.9483C45.52 47.2566 45.95 46.275 45.95 45.1833C45.9517 43.0483 44.2 41.2983 42.065 41.2983Z" fill="#FFAB2D"></path>
                        <path d="M40 10.8333C23.9167 10.8333 10.8333 23.9166 10.8333 40C10.8333 56.0833 23.9167 69.1666 40 69.1666C56.0833 69.1666 69.1667 56.0816 69.1667 40C69.1667 23.9183 56.0817 10.8333 40 10.8333ZM45.935 53.5066H42.495V58.9133H38.8867V53.5066H36.905V58.9133H33.28V53.5066H26.9067V50.1133H30.4233V29.7799H26.9067V26.3866H33.28V21.0883H36.905V26.3866H38.8867V21.0883H42.495V26.3866H45.6283C47.3783 26.3866 48.9917 27.1083 50.1433 28.26C51.295 29.4116 52.0167 31.025 52.0167 32.775C52.0167 36.2 49.3133 38.995 45.935 39.1483C49.8967 39.1483 53.0917 42.3733 53.0917 46.335C53.0917 50.2816 49.8983 53.5066 45.935 53.5066Z" fill="#FFAB2D"></path>
                        <path d="M44.385 36.5066C45.015 35.8766 45.3983 35.0316 45.3983 34.08C45.3983 32.1916 43.8633 30.655 41.9733 30.655H36.8133V37.52H41.9733C42.91 37.52 43.77 37.12 44.385 36.5066Z" fill="#FFAB2D"></path>
                        </svg>
                        <h2 class="text-black mb-2 font-w600">Gastritis</h2>
                        <p class="mb-0 fs-13">
                            <span class="text-secondary mr-1">Sebanyak <strong><?= $gas['kode_hasil']; ?></strong></span> <br>
                            Pengguna terdiagnosa awal Gastritis
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <svg class="mb-3 currency-icon" width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-full w-full" id="iconWithBackground">
                            <rect id="r4" width="512" height="512" x="0" y="0" rx="256" fill="#ca9ee6" stroke="#000000" stroke-width="0" stroke-opacity="100%" paint-order="stroke"></rect>
                            <defs>
                                <linearGradient id="linearGradient" gradientUnits="userSpaceOnUse" gradientTransform="rotate(0)" style="transform-origin: center center;">
                                    <stop stop-color="#8e2de2"></stop>
                                    <stop offset="1" stop-color="#4a00e0"></stop>
                                </linearGradient>
                                <radialGradient id="glare" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(256) rotate(90) scale(512)">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </radialGradient>
                                <clipPath id="clip">
                                    <use xlink:href="#r4"></use>
                                </clipPath>
                            </defs><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" x="128" y="128" class="iconify iconify--fa6-solid" width="256" height="256" viewBox="0 0 512 512" style="color: rgb(255, 255, 255);">
                                <path fill="currentColor" d="M96 352V96c0-35.3 28.7-64 64-64h256c35.3 0 64 28.7 64 64v197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7H160c-35.3 0-64-28.7-64-64zm176-224c-8.8 0-16 7.2-16 16v48h-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16h-48v-48c0-8.8-7.2-16-16-16h-32zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24H136C60.9 512 0 451.1 0 376V152c0-13.3 10.7-24 24-24s24 10.7 24 24v224c0 48.6 39.4 88 88 88h160z"></path>
                            </svg>
                        </svg>
                        <circle cx="40" cy="40" r="40" fill="white"></circle>
                        <path d="M40.725 0.00669178C18.6241 -0.393325 0.406678 17.1907 0.00666126 39.275C-0.393355 61.3592 17.1907 79.5933 39.2749 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8092 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17362 57.3257 7.50697 39.4083C7.82365 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8096 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z" fill="#374C98"></path>
                        <path d="M40.5283 10.8305C24.4443 10.5471 11.1271 23.3976 10.8438 39.4816C10.5438 55.549 23.3943 68.8662 39.4783 69.1662C55.5623 69.4495 68.8795 56.599 69.1628 40.5317C69.4462 24.4477 56.6123 11.1305 40.5283 10.8305ZM52.5455 56.9324H26.0111L29.2612 38.9483L25.4944 39.7317V36.6649L29.8279 35.7482L32.6447 20.2809H43.2284L40.8283 33.4481L44.5285 32.6647V35.7315L40.2616 36.6149L37.7949 50.2154H54.5122L52.5455 56.9324Z" fill="#374C98"></path>
                        </svg>
                        <h2 class="text-black mb-2 font-w600">GERD</h2>
                        <p class="mb-0 fs-14">
                            <span class="text-secondary mr-1">Sebanyak <strong><?= $ger['kode_hasil']; ?></strong></span> <br>
                            Pengguna terdiagnosa awal GERD
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <svg class="mb-3 currency-icon" width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-full w-full" id="iconWithBackground">
                            <rect id="r4" width="512" height="512" x="0" y="0" rx="256" fill="#3a1650" stroke="#000000" stroke-width="0" stroke-opacity="100%" paint-order="stroke"></rect>
                            <defs>
                                <linearGradient id="linearGradient" gradientUnits="userSpaceOnUse" gradientTransform="rotate(0)" style="transform-origin: center center;">
                                    <stop stop-color="#8e2de2"></stop>
                                    <stop offset="1" stop-color="#4a00e0"></stop>
                                </linearGradient>
                                <radialGradient id="glare" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(256) rotate(90) scale(512)">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </radialGradient>
                                <clipPath id="clip">
                                    <use xlink:href="#r4"></use>
                                </clipPath>
                            </defs><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" x="128" y="128" class="iconify iconify--covid" width="256" height="256" viewBox="0 0 24 24" style="color: rgb(255, 255, 255);">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                    <path d="M13.906 13.498a2.776 2.776 0 1 0 0-5.552a2.776 2.776 0 0 0 0 5.552Zm-.462-7.634h.925m-.463 0v2.082m3.108-.987l.655.655m-.328-.328l-1.472 1.473m2.895 1.5v.925m0-.462h-2.082m.987 3.108l-.655.654m.327-.327l-1.472-1.472m-1.5 2.895h-.925m.462 0v-2.082m-3.108.986l-.654-.654m.327.327l1.472-1.472m-2.895-1.501v-.925m0 .463h2.082m-.986-3.108l.654-.655m-.327.327l1.472 1.473"></path>
                                    <path d="M8.083 23.25a11.1 11.1 0 0 1 .826-3.731c4.13.685 11.261-1.615 13.4-5.892C25.17 7.9 20.184.781 13.6 1.878a10.621 10.621 0 0 0-5.3 2.551C7.051 3.248 7 2.8 5.98.75M.867.75a20.462 20.462 0 0 0 4.356 7.8C3.827 11.48 3.6 14.7 4.7 16.828a14.343 14.343 0 0 0-1.73 6.422"></path>
                                </g>
                            </svg>
                        </svg>
                        <circle cx="40" cy="40" r="40" fill="white"></circle>
                        <path d="M40.725 0.00669178C18.6241 -0.393325 0.406708 17.1907 0.00669178 39.275C-0.393325 61.3592 17.1907 79.5933 39.275 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8093 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17365 57.3257 7.507 39.4083C7.82368 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8097 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z" fill="#FF782C"></path>
                        <path d="M40.525 10.8238C24.441 10.5405 11.1238 23.391 10.8405 39.475C10.7455 44.5352 11.9605 49.3204 14.1639 53.5139H23.3326V24.8027C23.3326 23.0476 25.7177 22.4893 26.4928 24.0643L40 51.4171L53.5072 24.066C54.2822 22.4893 56.6674 23.0476 56.6674 24.8027V53.5139H65.8077C67.8578 49.6171 69.0779 45.2169 69.1595 40.525C69.4429 24.441 56.609 11.1238 40.525 10.8238Z" fill="#FF782C"></path>
                        <path d="M53.3339 55.1806V31.943L41.4934 55.919C40.9334 57.0574 39.065 57.0574 38.5049 55.919L26.6661 31.943V55.1806C26.6661 56.1007 25.9211 56.8474 24.9994 56.8474H16.2474C21.4326 64.1327 29.8629 68.9795 39.475 69.1595C49.4704 69.3362 58.3908 64.436 63.786 56.8474H55.0006C54.0789 56.8474 53.3339 56.1007 53.3339 55.1806Z" fill="#FF782C"></path>
                        </svg>
                        <h2 class="text-black mb-2 font-w600">Dispepsia</h2>
                        <p class="mb-0 fs-14">
                            <span class="text-secondary mr-1">Sebanyak <strong><?= $disp['kode_hasil']; ?></strong></span> <br>
                            Pengguna terdiagnosa awal Dispepsia
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pengguna Terbaru</h4>
                        <a href="<?= base_url('/riwayatdiagnose'); ?>" class="btn btn-secondary"><span class="btn-icon"><i class="fa fa-eye mr-2"></i></span>Lainnya</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>Nama</strong></th>
                                        <th><strong>Penyakit</strong></th>
                                        <th><strong>Tanggal Diagnosa</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $q = 0; ?>
                                    <?php 
                                    $i = 1;
                                    foreach($riwayat as $r) : ?>
                                    <tr>
                                        <td><strong><?= $i++; ?></strong></td>
                                        <td><?= $r['nama']; ?></td>
                                        <td><span class="badge light badge-secondary"><?= $r['nama_penyakit']; ?></span></td>
                                        <td><?php 
                                            $waktu = Time::parse($r['created_at'], 'Asia/Jakarta');
                                            echo $waktu->toLocalizedString('d MMMM, yyyy');
                                            ?>
                                        </td>
                                    </tr>
                                    <?php if (++$q == 5) break; ?>
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
</div>
<!-- batas isi dashboard utama -->
<?= $this->endSection(); ?>