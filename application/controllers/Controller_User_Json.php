<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_User_Json extends CI_Controller {


	public function index()
	{
	$this -> load -> model('Models_User');
        $user = $this->Models_User->list_user()->result();
        $aryuser = array();
        foreach ($user as $usr) {
        	array_push($aryuser,array(
         'id_user' =>$usr->id , 
         'nama_user' =>$usr->nama_user ,  
         'jabatan' =>$usr->jabatan , 
         'username' =>$usr->username , 
         'password' => $this->encrypt->decode($usr->password),
        ));
        }

        echo json_encode(array('user'=>$aryuser));
	}
}
