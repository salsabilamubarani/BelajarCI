<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products"; //nama tabel

    //nama kolom di tabel, harus sama huruf besar dan huruf kecilnya
    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
        // ini sama artinya seperti :
        // SELECT * FROM products
        // method ini akan mengembalikan semua array
        // yang berisi objek dari semua array
    }
}