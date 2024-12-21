<?php

namespace App\Traits;

use App\Models\TrafficModel;

trait TrafficTrait
{
    // Method untuk menambah baris baru di tabel traffic
    public function addTraffic($no_halaman)
    {
        // Membuat instance model TrafficModel
        $trafficModel = new TrafficModel();

        // Menyiapkan data yang akan dimasukkan ke tabel
        $data = [
            'no_halaman' => $no_halaman,
        ];

        // Menambahkan data ke tabel traffic
        $trafficModel->insert($data);
    }
}
