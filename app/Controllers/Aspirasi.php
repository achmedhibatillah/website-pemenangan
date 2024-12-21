<?php

namespace App\Controllers;

use App\Models\AspirasiModel;

use App\Traits\TrafficTrait;

class Aspirasi extends BaseController
{
    use TrafficTrait;

    public function index(): string
    {
        $this->addTraffic(4);

        session()->remove('home');

        $message = session()->getFlashdata('message');

        return 
        view('templates/header') . 
        view('aspirasi/index', ['message' => $message]) .
        view('templates/footer');
    } 
    public function kirim()
    {
        $model = new AspirasiModel();

        $data = [
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'program_studi' => $this->request->getVar('programStudi'),
            'saran' => $this->request->getVar('saran'),
        ];

        if ($model->simpanAspirasi($data)) {
            session()->setFlashdata('message', 'Aspirasi Anda telah berhasil dikirim!');
            if (session()->has('home')) {
                return redirect()->to('/#lp-aspirasi');
            } else if (!session()->has('home')) {
                return redirect()->to('/aspirasi');
            }
        } else {
            return redirect()->back()->with('error', 'Gagal mengirim aspirasi!');
        }
    }
}
