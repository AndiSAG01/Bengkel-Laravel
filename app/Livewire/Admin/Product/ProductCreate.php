<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductCreate extends Component
{
    use WithFileUploads;

    public $nama, $id_category, $harga, $stok, $gambar;

    protected $rules = [
        'nama'        => 'required|string|max:255',
        'id_category' => 'required|integer|exists:categories,id',
        'harga'       => 'required|numeric|min:0',
        'stok'        => 'required|integer|min:0',
        'gambar'      => 'required|image|max:2048', // max 2MB
    ];

    public function save()
    {
        $this->validate();

        if (!$this->gambar || !$this->gambar->isValid()) {
            toastr()->error('Gambar tidak valid atau belum diunggah');
            return;
        }

        $path = $this->gambar->store('gambar/produk', 'public');

        $product = Product::create([
            'nama'        => $this->nama,
            'id_category' => $this->id_category,
            'harga'       => $this->harga,
            'stok'        => $this->stok,
            'gambar'      => $path,
        ]);

        if (!$product) {
            toastr()->error('Produk Tidak Valid');
            return;
        }

        toastr()->success('Produk berhasil ditambahkan.');

        $this->reset(['nama', 'id_category', 'harga', 'stok', 'gambar']);

        return redirect()->route('product.index');
    }





    public function render()
    {
        return view('livewire.admin.product.product-create', [
            'categorys' => Category::all()
        ]);
    }
}
