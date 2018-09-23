<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Utama extends CI_Controller {

	public function index()
	{
		$admin = $this->session->userdata('user');
        if(!empty($admin['id_user'])){
		$this->load->view('Header');
		$this->load->view('V_HalamanUtama');
	    }else{
	    $this->load->view('View_Nologin');
	    }

	}
}
