<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'umur', 'kelas'];

    public function getAllSiswa()
    {
        return $this->db->table('siswa')->join('eskul', 'eskul.id_siswa == siswa.id')->get()->getResultArray(); // Retrieve all records
    }

    public function insertSiswa($data)
    {
        return $this->insert($data); // Insert data into the database
    }
}