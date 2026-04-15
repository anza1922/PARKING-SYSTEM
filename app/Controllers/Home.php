<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard', ['title' => 'Dashboard']);
    }

    public function reservasi(): string
    {
        return view('reservasi', ['title' => 'Reservasi']);
    }

    public function kendaraanMasuk(): string
    {
        return view('kendaraan_masuk', ['title' => 'Kendaraan Masuk']);
    }

    public function riwayat(): string
    {
        return view('riwayat', ['title' => 'Riwayat']);
    }

    public function keluar(): string
    {
        return view('keluar', ['title' => 'Checkout Kendaraan']);
    }

    public function pengaturan(): string
    {
        return view('pengaturan', ['title' => 'Pengaturan']);
    }

    public function login(): string
    {
        return view('login');
    }
}
