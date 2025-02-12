<?php

namespace App\Models;

use CodeIgniter\Model;

class EskulModel extends Model
{
    protected $table = 'eskul';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_siswa', 'eskul'];


}