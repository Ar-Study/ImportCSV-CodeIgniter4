<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $allowedFields = ['nama', 'umur', 'kelas'];

    public function getAllSiswa()
    {
        return $this->findAll(); // Retrieve all records
    }

    public function insertSiswa($data)
    {
        return $this->insert($data); // Insert data into the database
    }
}