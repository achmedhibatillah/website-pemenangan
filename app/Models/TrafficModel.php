<?php

namespace App\Models;

use CodeIgniter\Model;

class TrafficModel extends Model
{
    protected $table = 'traffic';
    protected $primaryKey = 'id';
    protected $allowedFields = ['no_halaman'];
    protected $useTimestamps = true;
}
