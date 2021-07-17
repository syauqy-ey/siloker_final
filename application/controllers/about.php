<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class about extends CI_Controller {

    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('about/index');
        $this->load->view('layouts/footer');
    }
}

?>