<?php

namespace App\Livewire\Users;

use App\Models\Booking as ModelsBooking;
use Livewire\Component;

class Booking extends Component
{
    public $nama, $nomor_hp, $email, $tipe_kendaraan, $plat_nomor, $atas_nama;
    public $jadwal_service, $tipe_service, $tipe_service_lainnya, $keluhan;

    public function submitBooking()
    {
        $this->validate([
            'nama' => 'required',
            'nomor_hp' => 'required',
            'email' => 'required|email',
            'tipe_kendaraan' => 'required',
            'plat_nomor' => 'required',
            'atas_nama' => 'required',
            'jadwal_service' => 'required|date',
            'tipe_service' => 'required',
            'tipe_service_lainnya' => 'required_if:tipe_service,Lainnya',
        ]);

        // Simpan data booking ke database (buat model Booking jika belum ada)
        ModelsBooking::create([
            'nama' => $this->nama,
            'nomor_hp' => $this->nomor_hp,
            'email' => $this->email,
            'tipe_kendaraan' => $this->tipe_kendaraan,
            'plat_nomor' => $this->plat_nomor,
            'atas_nama' => $this->atas_nama,
            'jadwal_service' => $this->jadwal_service,
            'tipe_service' => $this->tipe_service === 'Lainnya' ? $this->tipe_service_lainnya : $this->tipe_service,
            'keluhan' => $this->keluhan,
            'status' => 'Menunggu Konfirmasi'
        ]);

        $this->reset();

        return redirect()->route('booking')->with('success','Booking Berhasil Silahkan Datang Ke Bengkel');
    }

    public function render()
    {
        return view('livewire.users.booking')->layout('components.layouts.users');
    }
}
