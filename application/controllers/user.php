<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class user extends CI_Controller {

    public function login(){

        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        if(!empty($_username)){
            if($_username == 'admin' && $_password == 'admin123'){
                $this->session->set_userdata('username',$_username);
                $this->session->set_userdata('role','Admin');
                redirect(base_url('index.php/admin'),'refresh');
            }else{
                $data['info']='USERNAME atau PASSWORD salah';
            }
        }

        $data[] = '';
        $this->load->view('layouts/header');
        $this->load->view('user/login', $data);
        $this->load->view('layouts/footer');
    }

    public function logout(){
        session_destroy();
        redirect('user/login','refresh');
    }
}

?>