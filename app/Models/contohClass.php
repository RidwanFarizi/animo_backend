<?php namespace App\Models;

use CodeIgniter\Model;

class contohClass extends BaseModel
{
    protected $table      = 'bahan';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields= ['id','uniqueCode','idResep','nama', 'kategori', 'satuan', ' subBahan', 'merk', 'suplier', 'linkSuplier'];
}