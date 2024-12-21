<?php

namespace App\Controllers;

class Gagasan extends BaseController
{
    public function visi_misi(): string
    {
        return
        view('templates/header') . 
        view ('gagasan/visi-misi') . 
        view('templates/footer');
    }
    public function program_kerja(): string
    {
        return
        view('templates/header') . 
        view ('gagasan/program-kerja') . 
        view('templates/footer');
    }
    public function organigram(): string
    {
        return
        view('templates/header') . 
        view ('gagasan/organigram') . 
        view('templates/footer');
    }
    public function nilai(): string
    {
        return
        view('templates/header') . 
        view ('gagasan/nilai') . 
        view('templates/footer');
    }
}
