<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        // $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Home | Daftar Komik',
            'komik' => $this->komikModel->getKomik()
        ];

        #--------------------------------------------------------------------
        // konek dengan DATABASE tampa Model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM tabel_komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }
        #--------------------------------------------------------------------

        // $komikModel = new \App\Models\KomikModel();
        // $komikModel = new komikModel();

        return view('komik/index', $data);
    }

    public function tambah()
    {
        // session(); --- pindahkan ke BESTCONTROLLER agar tidak kelupaan ---
        $data = [
            'title' => 'Tambah Komik',
            'validation' => \Config\Services::validation()
        ];

        return view('komik/tambah', $data);
    }

    // proses simpan ke DATABASE
    public function save()
    {
        // validasi input
        if (!$this->validate([
            'judul' =>  [
                'rules' => 'required|is_unique[tabel_komik.judul]',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    'is_unique' => '{field} komik sudah ada'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/komik/tambah')->withInput()->with('validation', $validation);
        }

        // url_title() => untuk membuat semua menjadi huruf KECIL dan tanpa SPASI
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('flash', 'Data Berhasil Ditambahkan');

        return redirect()->to('/komik');
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        // jika komik tidak ada pada tabel
        if (empty($data['tabel_komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik' . $slug . 'tidak ditemukan');
        }

        return view('komik/detail', $data);
    }
}
