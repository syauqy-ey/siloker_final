<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class lowongan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model','admin');
        $this->load->model('lowongan_model','lowongan');
        $this->load->model('peminat_model','peminat');
    }

    public function index(){
        $data['data_loker']=$this->admin->getlokerAll();

        $this->load->view('layouts/header');
        $this->load->view('lowongan/index',$data);
        $this->load->view('layouts/footer');
    }

    public function detail($id){
        $obj_detail = $this->lowongan->detail($id);
        $data['objdetail'] = $obj_detail;
        
        $this->load->view('layouts/header');
        $this->load->view('lowongan/detail',$data);
        $this->load->view('layouts/footer');
    }

    public function daftar(){
        $data['data_peminat']=$this->peminat->getProdiAll();
        $data['data_lowongan']=$this->peminat->getLowonganAll();

        $this->load->view('layouts/header');
        $this->load->view('lowongan/form_lowongan',$data);
        $this->load->view('layouts/footer');
    }

    public function submit_peminat(){
        $_nim           =   $this->input->post('nim');
        $_nama          =   $this->input->post('nama');
        $_alasan        =   $this->input->post('alasan');
        $_prodi_id      =   $this->input->post('prodi_id');
        $_lowongan_id   =   $this->input->post('lowongan_id');

        $data = array(  'nim'           =>  $_nim,
                        'nama'          =>  $_nama,
                        'alasan'        =>  $_alasan,
                        'prodi_id'      =>  $_prodi_id,
                        'lowongan_id'   =>  $_lowongan_id,
        );

        $this->peminat->save($data);
        redirect(base_url('index.php/lowongan/'),'refresh');
    }

}

?>