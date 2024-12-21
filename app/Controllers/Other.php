<?php

namespace App\Controllers;

class Other extends BaseController
{
    public function index(): string
    {
        return 
        view('templates/header') . 
        view ('extension/music') . 
        view('templates/footer');
    }
    public function akasamimpi(): string
    {
        return 
        view('templates/header') . 
        view ('akasa/index') . 
        view('templates/footer');
    }    
}
