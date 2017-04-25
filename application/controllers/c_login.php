<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

    public function index()
    {
        $this->load->view('v_login');
    }
    public function reg_login()
    {
        $this->load->view('v_reg_login');
    }

}
?>
