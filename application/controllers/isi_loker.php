<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class isi_loker extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model', 'admin');
        $this->load->model('isiloker_model', 'model');
    }

    public function index(){
        
        $data['data_mitra'] = $this->model->getmitraAll();
        $this->load->view('layouts/header');
        $this->load->view('isi_loker/index',$data);
        $this->load->view('layouts/footer');
        
    }

    public function submit_loker(){
        $_deskripsi_pekerjaan   =   $this->input->post('deskripsi_pekerjaan');
        $_tanggal_akhir         =   $this->input->post('tanggal_akhir');
        $_mitra_id              =   $this->input->post('mitra_id');
        $_email                 =   $this->input->post('email');

        $data = array(  'deskripsi_pekerjaan'   =>  $_deskripsi_pekerjaan,
                        'tanggal_akhir'         =>  $_tanggal_akhir,
                        'mitra_id'              =>  $_mitra_id,
                        'email'                 =>  $_email,
        );

        $this->model->save($data);
        redirect(base_url('index.php/isi_loker'),'refresh');
    }
    
}

?>