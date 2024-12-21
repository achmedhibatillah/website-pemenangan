<?php

namespace App\Controllers;

use App\Traits\TrafficTrait;

class Home extends BaseController
{
    use TrafficTrait;

    public function getJson()
    {
        $filePath = FCPATH . 'json\identity.json';
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData, true);

        return $data;
    }
     
    public function index(): string
    {
        $this->addTraffic(1);
         
        session()->set('home', true);
        
        $message = session()->getFlashdata('message');

        $data = $this->getJson();

        return 
        view('templates/header') . 
        view ('home', ['data' => $data, 'message' => $message]) . 
        view('templates/footer');
    }
}
