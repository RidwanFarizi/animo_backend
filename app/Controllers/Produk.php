<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Produk extends Controller
{

    public function __construct()
    {

        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->produk = new ProdukModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }

    public function index()
    {
        $data['produk'] = $this->produk->getProduk();
        echo view('produk/index', $data);
    }

    public function create()
    {
        return view('produk/create');
    }

    public function save()
    {
        // Mengambil value dari form dengan method POST
        $name = $this->request->getPost('nama');
        $size = $this->request->getPost('ukuran');
        $price = $this->request->getPost('harga');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'idUser' => '3',
            'nama' => $name,
            'ukuran' => $size,
            'harga' => $price
        ];

        /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_product dan membawa parameter data 
    */
        $simpan = $this->produk->insert_produk($data);

        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Created product successfully');
            // Redirect halaman ke product
            return redirect()->to(base_url('produk'));
        }
    }

    public function edit($uniqueCode)
    {
        // Memanggil function getProduct($id) dengan parameter $id di dalam ProductModel dan menampungnya di variabel array product
        $produk = $this->produk->getProduk(['uniqueCode' => $uniqueCode]);
        $data['produk'] = $produk ? $produk[0] : false;
        // Mengirim data ke dalam view
        return view('produk/update', $data);
    }

    public function update($uniqueCode)
    {

        // Mengambil value dari form dengan method POST
        $name = $this->request->getPost('nama');
        $size = $this->request->getPost('ukuran');
        $price = $this->request->getPost('harga');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'idUser' => '3',
            'nama' => $name,
            'ukuran' => $size,
            'harga' => $price
        ];

        /* 
        Membuat variabel ubah yang isinya merupakan memanggil function 
        update_product dan membawa parameter data beserta id
        */
        $ubah = $this->produk->update_produk($data, $uniqueCode);

        // Jika berhasil melakukan ubah
        if ($ubah) {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('produk'));
        }
    }

    public function delete($uniqueCode)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $hapus = $this->produk->delete_produk(['uniqueCode' => $uniqueCode]);

        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('produk'));
        }
    }
}
