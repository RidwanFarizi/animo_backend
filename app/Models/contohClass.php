<?php namespace App\Models;

use CodeIgniter\Model;

class contohClass extends BaseModel
{
<<<<<<< HEAD
    protected $table      = 'bahan';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields= ['id','uniqueCode','idResep','nama', 'kategori', 'satuan', ' subBahan', 'merk', 'suplier', 'linkSuplier'];
=======
    protected $table      = 'bahan'; // nama tabel yang terhubung
    protected $primaryKey = 'id'; // primary key tabel
    protected $returnType = 'array'; 
    protected $allowedFields= ['id','token','username','password']; // kolom yang bisa dilakukan input, update, delete
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
}