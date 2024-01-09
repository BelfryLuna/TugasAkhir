<?php

namespace App\Controllers;

use App\Models\AkunModel;
use Myth\Auth\Password;

class Infoakun extends BaseController
{

    protected $AkunModel;

    public function __construct()
    {
        $this->AkunModel = new AkunModel();
    }

    // PROFIL

    // method ini dan seterusnya untuk mengurus bagian info akun(menampilkan, ubah data(update profil), ganti password)
    public function index()
    {
        $Akun = $this->AkunModel->getUser();
        $data = [
            'title' => 'Dashboard | Info Akun',
            'akun' => $Akun,
            'validation' => \Config\Services::validation()
        ];

        return view('profil/infoakun', $data);
    }

    public function updaterules()
    {
        if (user()->username == $this->request->getVar('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[users.username]';
        }

        if (user()->email == $this->request->getVar('email')) {
            $rule_email = 'required';
        } else {
            $rule_email = 'required|is_unique[users.email]';
        }

        $rules = [
            'username' => [
                'rules' => $rule_username,
                'errors' => [
                    'required' => 'Username Harus Diisi',
                    'is_unique' => 'Username Telah Digunakan'
                ]
            ],
            'email' => [
                'rules' => $rule_email,
                'errors' => [
                    'required' => 'Email Harus Diisi',
                    'is_unique' => 'Email Telah Terdaftar'
                ]
            ],
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap Harus Diisi'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,2024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran {field} terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ];
        return $rules;
    }

    public function update()
    {

        $user = user();
        $rules = $this->updaterules();

        if ($this->validate($rules)) {
            $fileFoto = $this->request->getFile('foto');
            if ($fileFoto->getError() == 4) {
                $namaFoto = $this->request->getPost('fotoLama');
            } else {
                $namaFoto = $fileFoto->getName();
                $fileFoto->move('images/', $namaFoto);
                if ($this->request->getPost('fotoLama') != 'defaultUser.jpg') {
                    unlink('images/' . $this->request->getPost('fotoLama'));
                }
            }

            $params = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'fullname' => $this->request->getPost('fullname'),
                'foto' => $namaFoto
            ];

            $same = $this->request->getPost('username') !== user()->username;
            $same1 = $this->request->getPost('email') !==  user()->email;
            $same2 = $this->request->getPost('fullname') !== user()->fullname;
            $same3 = $namaFoto !== user()->foto;

            $user->fill($params);
            if ($same) {
                session()->setFlashdata('success', 'Data Info Akun Berhasil Diubah');
                $this->AkunModel->save($user);
                return redirect()->to('/infoakun');
            } elseif ($same1) {
                session()->setFlashdata('success', 'Data Info Akun Berhasil Diubah');
                $this->AkunModel->save($user);
                return redirect()->to('/infoakun');
            } elseif ($same2) {
                session()->setFlashdata('success', 'Data Info Akun Berhasil Diubah');
                $this->AkunModel->save($user);
                return redirect()->to('/infoakun');
            } elseif ($same3) {
                session()->setFlashdata('success', 'Data Info Akun Berhasil Diubah');
                $this->AkunModel->save($user);
                return redirect()->to('/infoakun');
            } else {
                session()->setFlashdata('empty', 'Tidak Ada Data Yang Diubah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Data info akun gagal diubah!');
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/infoakun')->withInput()->with('errors', $this->validator->getErrors());
        }
    }



    // private function getChangePasswordRules()
    // {
    //     $rules = [
    //         'password_lama' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Password sekarang harus di isi',
    //             ]
    //         ],
    //         'password_baru' => [
    //             'rules' => 'required|strong_password',
    //             'errors' => [
    //                 'required' => 'Password baru harus di isi',
    //                 'strong_password' => 'Password terlalu lemah',
    //             ]
    //         ],
    //         'konfirm_password' => [
    //             'rules'  => 'required|matches[new_pass]',
    //             'errors' => [
    //                 'required' => 'Repeat Password baru harus di isi',
    //                 'matches'  => 'Repeat Password tidak sama!'
    //             ]
    //         ],

    //     ];

    //     return $rules;
    // }

    // public function changePassword()
    // {
    //     $user = user();

    //     $currentPass = $this->request->getVar('password_lama');
    //     $newPass = $this->request->getVar('password_baru');

    //     $rules = $this->getChangePasswordRules();

    //     if ($this->validate($rules)) {

    //         if (Password::verify($currentPass, $user->password_hash)) {
    //             $user->password = $newPass;
    //             $this->AkunModel->save($user);
    //             session()->setFlashdata('success', 'Password info akun berhasil diubah!');
    //             return redirect()->to('/infoakun');
    //         } else {
    //             session()->setFlashdata('isChangePw', true);
    //             session()->setFlashdata('error', 'Password profile gagal diubah!');
    //             $this->validator->setError('verify', 'salah!');
    //         }
    //     }
    //     session()->setFlashdata('isChangePw', true);
    //     session()->setFlashdata('error', 'Password info akun gagal diubah!');
    //     return redirect()->to('/infoakun')->withInput()->with('errors', $this->validator->getErrors());
    // }

    // private function getChangePasswordRules()
    // {
    //     $rules = [
    //         'password_lama' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Password sekarang harus di isi',
    //             ]
    //         ],
    //         'password_baru' => [
    //             'rules' => 'required|strong_password',
    //             'errors' => [
    //                 'required' => 'Password baru harus di isi',
    //                 'strong_password' => 'Password terlalu lemah',
    //             ]
    //         ],
    //         'konfirm_password' => [
    //             'rules'  => 'required|matches[new_pass]',
    //             'errors' => [
    //                 'required' => 'Repeat Password baru harus di isi',
    //                 'matches'  => 'Repeat Password tidak sama!'
    //             ]
    //         ],

    //     ];

    //     return $rules;
    // }

    // public function updatePassword()
    // {
    //     $user = user();

    //     $passwordLama = $this->request->getVar('password_lama');
    //     $passwordBaru = $this->request->getVar('password_baru');

    //     $rules = $this->getChangePasswordRules();

    //     if ($this->validate($rules)) {

    //         if (Password::verify($passwordLama, $user->password_hash)) {
    //             $user->password = $passwordBaru;
    //             $this->AkunModel->save($user);
    //             session()->setFlashdata('success', 'Password akun berhasil diubah!');
    //             return redirect()->to('/infoakun');
    //         } else {
    //             session()->setFlashdata('isChangePw', true);
    //             session()->setFlashdata('error', 'Password akun gagal diubah!');
    //             $this->validator->setError('verify', 'salah!');
    //         }
    //     }
    //     session()->setFlashdata('isChangePw', true);
    //     session()->setFlashdata('error', 'Password akun gagal diubah!');
    //     return redirect()->to('/infoakun')->withInput()->with('errors', $this->validator->getErrors());
    // }

    public function updatePassword($id)
    {
        if (!$this->validate([
            'password_lama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password sekarang harus diisi'
                ]
            ],
            'password_baru' => [
                'rules' => 'required|strong_password',
                'errors' => [
                    'required' => 'Password baru harus diisi',
                    'strong_password' => 'Password terlalu lemah'
                ]
            ],
            'konfirm_password' => [
                'rules' => 'required|matches[password_baru]',
                'errors' => [
                    'required' => 'Konfirmasi password harus diisi',
                    'matches'  => 'Konfirmasi Password tidak sama!'
                ]
            ]
        ])) {
            session()->setFlashdata('isChangePw', true);
            session()->setFlashdata('error', $this->validator->listErrors());
            session()->setFlashdata('error', 'Password akun gagal diubah!');
            return redirect()->to('/infoakun')->withInput()->with('errors', $this->validator->getErrors());
        }

        $password_lama = $this->request->getVar('password_lama');

        if (Password::verify($password_lama, user()->password_hash)) {
            $this->AkunModel->save([
                'id' => $id,
                'password_hash' => Password::hash($this->request->getVar('password_baru'))
            ]);
            session()->setFlashdata('isChangePw', true);
            session()->setFlashdata('success', 'Password Akun Berhasil Diubah');
            return redirect()->to('/infoakun');
        } else {
            session()->setFlashdata('isChangePw', true);
            session()->setFlashdata('error', 'Password akun gagal diubah!');
            $this->validator->setError('verify', 'salah!');
            return redirect()->to('/infoakun');
        }
    }
}
