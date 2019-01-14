<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    private $_table = "customer"; //nama tabel

    //nama kolom di tabel, harus sama huruf besar dan huruf kecilnya
    public $customer_id;
    public $name;
    public $address;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
        // ini sama artinya seperti :
        // SELECT * FROM products
        // method ini akan mengembalikan semua array
        // yang berisi objek dari semua array
    }
}