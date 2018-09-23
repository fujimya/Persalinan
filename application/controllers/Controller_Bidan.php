<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Bidan extends CI_Controller {

	public function index()
	{
		$this ->load-> model('Models_Bidan');
		$data['bidan'] = $this->Models_Bidan->list_Bidan()->result();
		$this->load->view('Header.php');
		$this->load->view('View_Bidan',$data);
	}
	public function tambah(){
		$this->load->view('Header.php');
		$this->load->view('View_Bidan_Tambah');
	}

	public function simpan(){
		$data = array(
				'id_bidan' => chr(rand(65,90)).rand(10,100).rand(100,10000).chr(rand(65,90)),
				'nama_bidan' => $this->input->post('nama_bidan'),
				'telp' => $this->input->post('telp'),
                'jam_buka' => $this->input->post('jam_buka'),
                'daerah' => $this->input->post('daerah'),
                'latlon' => $this->input->post('LatLng'),		
				);
		//print_r($data);
				$this ->load-> model('Models_Bidan');
				$bidan = $this->Models_Bidan->save($data);

				echo "Sedang diproses...";

				if($bidan == true){
					echo "<script>window.location.href='".base_url()."de69812784f2c02044e61be7t84cfe52';</script>";
				}
	}

	public function hapus($id){
	$this ->load-> model('Models_Bidan');
	$hapus = $this->Models_Bidan->delete($id);
	if($hapus = true){
		echo "Sedang diproses...";
		echo "<script>window.location.href='".base_url()."de69812784f2c02044e61be7t84cfe52';</script>";
		}
	}
	
}
