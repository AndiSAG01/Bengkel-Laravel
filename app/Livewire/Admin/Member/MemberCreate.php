<?php

namespace App\Livewire\Admin\Member;

use App\Models\Member;
use Livewire\Component;

class MemberCreate extends Component
{
    public $nama,$nomor_handphone;

    protected $rules =[
        'nama' => 'required|string|max:100',
        'nomor_handphone' => 'required|max:15'
    ];

    public function save()
    {
        $this->validate();
        Member::create([
            'nama' => $this->nama,
            'nomor_handphone' => $this->nomor_handphone
        ]);

        toastr()->success('Berhasil Tambah Data');
        $this->reset('nama','nomor_handphone');
        return redirect()->route('member.index');
    }
    public function render()
    {
        return view('livewire.admin.member.member-create');
    }
}
