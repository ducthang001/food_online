<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gioithieu extends CI_Controller
{
    // Hàm khởi tạo
    function __construct()
    {
        parent::__construct();
        $this->data['com'] = 'gioithieu';
        $this->load->model('frontend/Mcategory');
        $this->load->model('frontend/Mproduct');
    }

    public function index()
    {
        $this->data['title'] = 'PTITFOOD - Giới thiệu';
        $this->data['view'] = 'index';
        $this->load->view('frontend/layout', $this->data);
    }
}
