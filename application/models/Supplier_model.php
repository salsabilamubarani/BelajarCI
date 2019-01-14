<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    private $_table = "supplier"; //nama tabel

    //nama kolom di tabel, harus sama huruf besar dan huruf kecilnya
    public $supplier_id;
    public $supplier_name;
    public $supplier_address;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
        // ini sama artinya seperti :
        // SELECT * FROM products
        // method ini akan mengembalikan semua array
        // yang berisi objek dari semua array
    }
}