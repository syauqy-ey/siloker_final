<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class berita extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model', 'admin');
    }

    public function index(){
        $data['data_loker']=$this->admin->getDataLowongan();

        $this->load->view('layouts/header');
        $this->load->view('berita/index',$data);
        $this->load->view('layouts/footer');
    }

    public function berita1(){
        $data['data_loker']=$this->admin->getDataLowongan();

        $this->load->view('layouts/header');
        $this->load->view('berita/berita1',$data);
        $this->load->view('layouts/footer');
    }

    public function berita2(){
        $data['data_loker']=$this->admin->getDataLowongan();

        $this->load->view('layouts/header');
        $this->load->view('berita/berita2',$data);
        $this->load->view('layouts/footer');
    }

    public function berita3(){
        $data['data_loker']=$this->admin->getDataLowongan();

        $this->load->view('layouts/header');
        $this->load->view('berita/berita3',$data);
        $this->load->view('layouts/footer');
    }

    public function berita4(){
        $data['data_loker']=$this->admin->getDataLowongan();
        
        $this->load->view('layouts/header');
        $this->load->view('berita/berita4',$data);
        $this->load->view('layouts/footer');
    }
}

?>