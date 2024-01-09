<?php

namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\HasilModel;
use App\Models\PenyakitModel;
use App\Models\BaspengetahuanModel;
use App\Models\KuisionerModel;
use Kint\Zval\Value;

class Diagnosa_penyakit extends BaseController
{
    protected $GejalaMod;
    protected $ipAddress;
    protected $HasilMod;
    protected $PenyakitMod;
    protected $BasisMod;
    protected $KuisionerMod;


    public function __construct()
    {
        $this->GejalaMod = new GejalaModel();
        $this->ipAddress = service('request')->getIPAddress();
        $this->HasilMod = new HasilModel();
        $this->PenyakitMod = new PenyakitModel();
        $this->BasisMod = new BaspengetahuanModel();
        $this->KuisionerMod = new KuisionerModel();

    }

    public function index()
    {
        $data = [
            'title' => 'Sahabat Lambung | Diagnosa',
            'gejala' => $this->BasisMod->basisGejala(),
            'validation' => \Config\Services::validation(),
        ];
        
        return view('viewuser/diagnosa', $data);
    }

    public function biodatarules()
    {
        $rules = [
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus di isi',
                ]
            ],
            'jk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin harus dipilih',
                ]
            ],
            'umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Umur harus di isi',
                ]
            ]
        ];
        return $rules;
    }

    public function hasil()
    {
        // variabel $biodatarules digunakan untuk menyimpan data biodata dari pengguna saat diagnosa
        $biodatarules = $this->biodatarules();

        if (!$this->validate($biodatarules)) {
            session()->setFlashdata('error', 'Isi biodata dengan lengkap');
            return redirect()->to('/diagnosa')->withInput();
        }

        // variabel $selectGejala digunakan untuk menampilkan daftar gejala juga dan saat memilihnya
        $selectGejala = $this->request->getVar('kode_gejala');
        if ($selectGejala) {
            $jmldata = count($selectGejala);
        }

        // disini terjadi pengkondisian apabila pengguna memilih kurang dari dua maka diagnosa dianggap tidak valid
        if (!$selectGejala || $jmldata < 2) {
            session()->setFlashdata('error', 'Gagal memproses diagnosa, minimal 2 gejala yang harus dipilih!');
            return redirect()->to('/diagnosa')->withInput();
        } 

        // variabel $dataAllBasis untuk mengambil data yang ada pada model basispengetahuan berdasarkan id/kode
        $dataAllBasis = $this->BasisMod->getBasisAll();

        // perulangan
        foreach ($selectGejala as $jgejala) {
            $diagnosa[] = [
                'kode_gejala' => $jgejala,
            ];
        }

        // perulangan 
        foreach ($dataAllBasis as $da) :
            foreach ($diagnosa as $dgt) :
                if ($da['kode_gejala'] === $dgt['kode_gejala']) {
                    $cekPenyakit[] = [
                        'kode_penyakit' => $da['kode_penyakit']
                    ];
                }
            endforeach;
        endforeach;     
        
        // method 
        function groubby($cekPenyakit, $key) {
            foreach ($cekPenyakit as $val) {
                $return[$val[$key]][] = $val;
            }
            return $return;
        } 

        // variabel
        $hasilcek = groubby($cekPenyakit, 'kode_penyakit');
        $pb = count($hasilcek);
        $pn = 1 / 3;
        $allpenyakit = $this->PenyakitMod->getAllPenyakit();

        // untuk menghitung probabilitas gejala yang telah dipilih
        foreach ($hasilcek as $hc) :
            if ($hc[0]['kode_penyakit']) {
                foreach ($allpenyakit as $alp) :
                    foreach ($diagnosa as $dg) :
                        $same = $this->BasisMod->getBasisSame($alp['kode_penyakit'], $dg['kode_gejala']);
                        if ($same) {
                            $nc = 1;
                            $bobot = $nc / $pb;
                            $probaG[$alp['kode_penyakit']][$dg['kode_gejala']] = $bobot;
                        } else {
                            $nc = 0;
                            $bobot = $nc / $pb;
                            $probag[$alp['kode_penyakit']][$dg['kode_gejala']] = $bobot;
                        }
                    endforeach;
                endforeach;        
            }
        endforeach;

        // untuk menghitung probabiliitas penyakit
        foreach ($probaG as $prg => $idG) :
            foreach ($idG as $cgej => $value) :
                if ($prg === $prg) {
                    $totalpp[] = [
                        'kode_penyakit' => $prg,
                        'kode_gejala' => $cgej,
                        'nilaiAtas' => $value * $pn
                    ];
                }
                if ($cgej === $cgej) {
                    $totalgg[] = [
                        'kode_penyakit' => $prg,
                        'kode_gejala' => $cgej,
                        'nilai' => $value * $pn
                    ];
                }
            endforeach;
        endforeach;
        
        // 
        $totalbawah = array_reduce($totalgg, function ($carry, $item) {
            if (!isset($carry[$item['kode_gejala']])) {
                $carry[$item['kode_gejala']] = ['kode_gejala' => $item['kode_gejala'], 'nilai' => $item['nilai']];
            } else {
                $carry[$item['kode_gejala']]['nilai'] += $item['nilai'];
            }
            return $carry;
        });

        // 
        foreach ($totalpp as $tpp) :
            foreach ($totalbawah as $tbw) :
                if ($tpp['kode_gejala'] === $tbw['kode_gejala']) {
                    $result[$tpp['kode_penyakit']][] = $tpp['nilaiAtas'] / $tbw['nilai'];
                }
            endforeach;
        endforeach;   
        
        // menghitung total probabilitas
        foreach ($result as $kodp => $subnilai) :
            $subtotal[] = [
                'kode_penyakit' => $kodp,
                'nilai' => array_sum($subnilai)
            ];
            $totalp[] = array_sum($subnilai);
        endforeach;
        
        $total = array_sum($totalp);

        // mengubah hasil probalitas diagnosa ke dalam persen
        foreach ($subtotal as $st) {
            $nilai = ($st['nilai'] / $total) * 100;
            if ($nilai > 0) {
                $arpenyakit[$st['kode_penyakit']] = substr($nilai, 0, 5);
            }
        }

        arsort($arpenyakit);
        $inppenyakit = serialize($arpenyakit);

        // 
        foreach ($arpenyakit as $key1 => $value1) {
            $idpenyakithasil[] = $key1;
            $nilaihasil[] = $value1;
        }

        // 
        foreach ($selectGejala as $jgejala) {
            $serGej[] = $jgejala;
        }

        $inpGej = serialize($serGej);

        $param = [
            'nama' => $this->request->getVar('nama'),
            'umur' => $this->request->getVar('umur'),
            'jk' => $this->request->getVar('jk'),
            'penyakit' => $inppenyakit,
            'gejala' => $inpGej,
            'kode_penyakit' => $idpenyakithasil[0],
            'nilai' => $nilaihasil[0]
        ];

        $this->HasilMod->save($param);

        // menampilkan hasil diagnosa

        $allG = $this->GejalaMod->getGejala();
        $allP = $this->PenyakitMod->getAllPenyakit();

        // 
        foreach ($allG as $ag) {
            $namaG[$ag['kode_gejala']] = $ag['deskripsi_gejala'];
        }
        
        foreach ($serGej as $key) {
            $dataGejala[] = [
                'kode_gejala' => $key,
                'deskripsi_gejala' =>  $namaG[$key]
            ];
        }

        foreach ($allP as $ap) {
            $arpkt[$ap['kode_penyakit']] = [
                'namap' => $ap['nama_penyakit'],
                'deskp' => $ap['desk'],
                'pengobatanp' => $ap['pengobatan'],
                'pencegahanp' => $ap['pencegahan'],
                'gambarp' => $ap['gambar'],
                'gambar2p' => $ap['gambar2'],
                'gambar3p' => $ap['gambar3'],
                'gambar4p' => $ap['gambar4'],
                'gambar5p' => $ap['gambar5'],
                'gambar6p' => $ap['gambar6']
            ];
        }

        foreach ($arpenyakit as $key => $value) {
            $dataPenyakit[] = [
                'kode_penyakit' => $key,
                'nama_penyakit' => $arpkt[$key]['namap'],
                'desk' => $arpkt[$key]['deskp'],
                'pengobatan' => $arpkt[$key]['pengobatanp'],
                'pencegahan' => $arpkt[$key]['pencegahanp'],
                'gambar' => $arpkt[$key]['gambarp'],
                'gambar2' => $arpkt[$key]['gambar2p'],
                'gambar3' => $arpkt[$key]['gambar3p'],
                'gambar4' => $arpkt[$key]['gambar4p'],
                'gambar5' => $arpkt[$key]['gambar5p'],
                'gambar6' => $arpkt[$key]['gambar6p'],
                'nilai' => $value
            ];
        }
        
        $data = [
            'title' => 'Sahabat Lambung | Hasil Diagnosa',
            'hasilD' => $dataGejala,
            'pLain' => $dataPenyakit,
            'maxN' => $dataPenyakit[0]['kode_penyakit']
        ];

        $session = session();

        $datanm = [
            'nama' => $this->request->getVar('nama'),
            'umur' => $this->request->getVar('umur'),
            'jk' => $this->request->getVar('jk')
        ];

        $session->set($datanm);

        return view('/viewuser/hasil_diagnosa', $data);
    }



    public function kuisioner()
    {
        if (session()->get('nama') == null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data = [
            'title' => 'Sahabat Lambung | Kuisioner UAT',
            'pertanyaan' => $this->KuisionerMod->getPertanyaan(),
        ];
        return view('viewuser/kuisioner', $data);
    }

    public function proseskuis()
    {
        // 
        $jawaban = $this->request->getVar('jawaban');
        $idpertanyaan = $this->request->getVar('idpertanyaan');

        // 
        foreach ($jawaban as $jw) {
            if ($jw == false) {
                session()->setFlashdata('error', 'Isi pertanyaan kuisioner  secara lengkap');
                return redirect()->back();
            }
        }

        // 
        foreach ($idpertanyaan as $ip => $value) {
            $uat[] = [
                'idp' => $value,
                'jwb' => $jawaban[$ip]
            ];
        }
        $seriuat = serialize($uat);

        // untuk menyimpan biodata yang telah didapet dari session ketika melakukan diagnosa sebelumnya
        $this->KuisionerMod->save([
            'nama' => session()->get('nama'),
            'umur' => session()->get('umur'),
            'jk' => session()->get('jk'),
            'uat' => $seriuat
        ]);

        session()->remove(['nama', 'umur', 'jk']);
        session()->setFlashdata('success', 'Jawaban Kuisioner UAT berhasil dikirim');
        return redirect()->to('/riwayat_pengguna');
    }

}
