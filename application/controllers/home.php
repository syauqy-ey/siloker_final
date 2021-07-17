<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model', 'admin');
    }

    public function index(){
        $data['data_loker']=$this->admin->getDataLowongan();

        $this->load->view('layouts/header');
        $this->load->view('home/index',$data);
        $this->load->view('layouts/footer');
    }
}

?>