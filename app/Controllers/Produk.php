<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;
use App\Models\KategoriModel;

class Produk extends Controller
{

    public function __construct()
    {

        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->produk = new ProdukModel();
        $this->kategori = new KategoriModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }

    public function index()
    {


        $category = htmlspecialchars($this->request->getVar('nama_kategori'));
        // $data[] = [
        //     'produk' => $this->produk->getProduk($data = false, $column = false, $orderBy = false, $typeOrder = 'desc', $category),
        //     'kategori' => $this->produk->kategori()
        // ];
        $data['produk'] = $this->produk->getProduk($data = false, $column = false, $orderBy = false, $typeOrder = 'desc', $category);

        $data['kategori'] = $this->produk->kategori();


        //dd($data);
        return view('produk/index', $data);
    }


    public function create()
    {
        $data['produk'] = $this->produk->getProduk();
        return view('produk/create', $data);
    }


    public function save()
    {

        // Mengambil value dari form dengan method POST
        $name = $this->request->getPost('nama');
        $size = $this->request->getPost('ukuran');
        $price = $this->request->getPost('harga');
        $category =  $this->request->getPost('nama_kategori');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'idUser' => '3',
            'nama' => $name,
            'ukuran' => $size,
            'harga' => $price,
            'nama_kategori' => $category
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
        $category = $this->request->getPost('nama_kategori');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'idUser' => '3',
            'nama' => $name,
            'ukuran' => $size,
            'harga' => $price,
            'nama_kategori' => $category
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
