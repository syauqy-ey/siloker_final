<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class daftar_mitra extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('daftarmitra_model','form');
    }
    
    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('daftar_mitra/index');
        $this->load->view('layouts/footer');
    }

    public function form_mitra(){
        $data['data_bdusaha'] = $this->form->getbdusahaAll();
        $data['data_shusaha'] = $this->form->getshusahaAll();
        $this->load->view('layouts/header');
        $this->load->view('daftar_mitra/form_mitra',$data);
        $this->load->view('layouts/footer');
    }

    public function submit_mitra(){
        $_nama              =   $this->input->post('nama');
        $_alamat            =   $this->input->post('alamat');
        $_kontak            =   $this->input->post('kontak');
        $_telpon            =   $this->input->post('telpon');
        $_email             =   $this->input->post('email');
        $_web               =   $this->input->post('web');
        $_bidang_usaha_id   =   $this->input->post('bidang_usaha_id');
        $_sektor_usaha_id   =   $this->input->post('sektor_usaha_id');

        $data = array(  'nama'              =>  $_nama,
                        'alamat'            =>  $_alamat,
                        'kontak'            =>  $_kontak,
                        'telpon'            =>  $_telpon,
                        'email'             =>  $_email,
                        'web'               =>  $_web,
                        'bidang_usaha_id'   =>  $_bidang_usaha_id,
                        'sektor_usaha_id'   =>  $_sektor_usaha_id,
        );

        $this->form->save($data);
        redirect(base_url('index.php/daftar_mitra/form_mitra'),'refresh');
    }
}

?>