<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class login extends CI_Controller {

    public function index(){

        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        if(!empty($_username)){
            if($_username == 'admin' && $_password == 'admin123'){
                redirect(base_url('index.php/admin'),'refresh');
            }else{
                $data['info']='USERNAME atau PASSWORD salah';
            }
        }

        $data[] = '';
        $this->load->view('layouts/header');
        $this->load->view('login/index', $data);
        $this->load->view('layouts/footer');
    }
}

?>