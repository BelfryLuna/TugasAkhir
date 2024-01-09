<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// kelola routes untuk controller Pages (terdiri: dashboard admin, landing page)
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Pages::index', ['filter' => 'role:admin']);

// kelola routes untuk controller kelolaakun (terdiri: daftar akun, tambah akun, info akun)
$routes->get('/kelolaakun', 'kelolaakun::index', ['filter' => 'role:admin']);
$routes->get('/kelolaakun/addakun', 'kelolaakun::addakun', ['filter' => 'role:admin']);
$routes->post('/kelolaakun/delakun/(:segment)', 'kelolaakun::delakun/$1', ['filter' => 'role:admin']);

// routes untuk profil(menampilkan, update data akun, ganti password)
$routes->get('/infoakun', 'infoakun::index', ['filter' => 'role:admin']);
$routes->post('/infoakun/update', 'infoakun::update', ['filter' => 'role:admin']);
$routes->post('/infoakun/updatePassword/(:segment)', 'infoakun::updatePassword/$1', ['filter' => 'role:admin']);


// kelola routes untuk controller keloladata (terdiri: kelola penyakit, gejala, basis pengetahuan dan riwayat)
// routes untuk kelola gejala
$routes->get('/keloladata/gejala', 'keloladata::index', ['filter' => 'role:admin']);
$routes->post('/keloladata/savegejala', 'keloladata::savegejala', ['filter' => 'role:admin']);
$routes->post('/keloladata/upgejala/(:segment)', 'keloladata::upgejala/$1', ['filter' => 'role:admin']);
$routes->post('/keloladata/delgejala/(:segment)', 'keloladata::delgejala/$1', ['filter' => 'role:admin']);

// routes untuk basis pengetahuan
$routes->get('/keloladata/baspengetahuan', 'keloladata::baspengetahuan', ['filter' => 'role:admin']);
$routes->post('/keloladata/savebaspengetahuan', 'keloladata::savebaspengetahuan', ['filter' => 'role:admin']);
$routes->post('/keloladata/hapusbaspengetahuan/(:segment)', 'keloladata::hapusbaspengetahuan/$1', ['filter' => 'role:admin']);


// routes untuk kelola penyakit
$routes->get('/keloladata/penyakit', 'keloladata::penyakit', ['filter' => 'role:admin']);
$routes->get('/keloladata/penyakit/tambpenyakit', 'keloladata::tambpenyakit', ['filter' => 'role:admin']);
$routes->get('/keloladata/penyakit/detailpenyakit/(:segment)', 'keloladata::detailpenyakit/$1', ['filter' => 'role:admin']);
$routes->post('/keloladata/penyakit/savepenyakit', 'keloladata::savepenyakit', ['filter' => 'role:admin']);
$routes->get('/keloladata/penyakit/editpenyakit/(:segment)', 'keloladata::edpenyakit/$1', ['filter' => 'role:admin']);
$routes->post('/keloladata/penyakit/uppenyakit/(:segment)', 'keloladata::uppenyakit/$1', ['filter' => 'role:admin']);
$routes->post('/keloladata/(:segment)', 'keloladata::delpenyakit/$1', ['filter' => 'role:admin']);

// routes untuk riwayat diagnosa
$routes->get('/riwayatdiagnose', 'riwayatdiagnose::index', ['filter' => 'role:admin']);
$routes->get('/riwayatdiagnose/hapusdiag/(:segment)', 'riwayatdiagnose::hapusdiag/$1', ['filter' => 'role:admin']);

// routes untuk kelola blog
$routes->get('/blog', 'blog::index', ['filter' => 'role:admin']);
$routes->get('/blog/tambahblog', 'blog::tambahblog', ['filter' => 'role:admin']);
$routes->get('/blog/detailblog/(:segment)', 'blog::detailblog/$1', ['filter' => 'role:admin']);
$routes->post('/blog/saveblog', 'blog::saveblog', ['filter' => 'role:admin']);
$routes->get('/blog/editblog/(:segment)', 'blog::editblog/$1', ['filter' => 'role:admin']);
$routes->post('/blog/updateblog/(:segment)', 'blog::updateblog/$1', ['filter' => 'role:admin']);
$routes->post('/blog/hapusblog/(:segment)', 'blog::hapusblog/$1', ['filter' => 'role:admin']);

// routes untuk kelola pengembang
$routes->get('/pengembang', 'pengembang::index', ['filter' => 'role:admin']);
$routes->get('/pengembang/tambahpengembang', 'pengembang::tambahpengembang', ['filter' => 'role:admin']);
$routes->post('/pengembang/savepengembang', 'pengembang::savepengembang', ['filter' => 'role:admin']);
$routes->post('/pengembang/hapuspengembang/(:segment)', 'pengembang::hapuspengembang/$1', ['filter' => 'role:admin']);

// routes untuk kuisioner uat
$routes->get('/kuisioner', 'kuisioner::index', ['filter' => 'role:admin']);

// routes untuk Menampilkan Halaman untuk halaman pengguna
// routes untuk info penyakit
$routes->get('/info_penyakit', 'info_penyakit::index');
$routes->get('/info_penyakit/(:segment)', 'info_penyakit::detailpenyakitblog/$1');

// rooutes untuk halaman diagnosa
$routes->get('/diagnosa', 'Diagnosa_penyakit::index');
$routes->post('/diagnosa/hasil', 'Diagnosa_penyakit::hasil');
$routes->get('/diagnosa/kuisioner', 'Diagnosa_penyakit::kuisioner');
$routes->post('/diagnosa/proseskuis', 'Diagnosa_penyakit::proseskuis');

// routes untuk riwayat
$routes->get('/riwayat_pengguna', 'Riwayat::index');
$routes->get('/riwayat/(:segment)', 'Riwayat::detail/$1');

// routes untuk info pengembang
$routes->get('/info_pengembang', 'info_pengembang::index');

// routes untuk bantuan
$routes->get('/bantuan', 'bantuan::index');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
