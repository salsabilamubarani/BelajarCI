<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("karyawan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["karyawan"] = $this->karyawan_model->getAll();
        $this->load->view("admin/karyawan/list", $data);
    }
}