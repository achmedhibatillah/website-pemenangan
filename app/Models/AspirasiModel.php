<?php

namespace App\Models;

use CodeIgniter\Model;

class AspirasiModel extends Model
{
    protected $table = 'aspirasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'program_studi', 'saran'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at'; 
    protected $updatedField = 'updated_at';

    public function simpanAspirasi($data)
    {
        return $this->insert($data);
    }
}
