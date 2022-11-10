<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Controllers\Mahasiswa;

class Modelmahasiswa extends Model
{
    protected $table            = 'mahasiswa';     
    protected $primaryKey       = 'mhsnobp';     
    protected $allowedFields    = [         
        'mhsnobp','mhsnama','mhsalamat','prodinama','mhstgllhr'     
    ];
}
