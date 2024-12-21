<?php

namespace App\Controllers;

use App\Traits\TrafficTrait;

class Profil extends BaseController
{
    use TrafficTrait;

    public function getJson()
    {
        $filePath = FCPATH . 'json\identity.json';
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData, true);

        return $data;
    }

    public function zidane(): string
    {
        $this->addTraffic(2);

        $data = $this->getJson();

        return
        view('templates/header') . 
        view ('profil/calon', ['data' => $data[0]]) . 
        view('templates/footer');
    }

    public function rere(): string
    {
        $this->addTraffic(3);

        $data = $this->getJson();

        return
        view('templates/header') . 
        view ('profil/calon', ['data' => $data[1]]) . 
        view('templates/footer');
    }
}
