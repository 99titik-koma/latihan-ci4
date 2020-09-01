<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'tabel_komik';
    protected $primaryKey = 'id_komik';

    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getKomik($slug = false)
    {
        // jika tidak terdapat slug tampilkan semua data 
        if ($slug == false) {
            return $this->findAll();
        }

        // jika terdapat slug
        return $this->where(['slug' => $slug])->first();
    }
}
