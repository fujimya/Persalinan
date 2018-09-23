<?php
class Models_Karyawan extends CI_Model{

    var $table = 'tbl_karyawan';
    
    function list_karyawan(){
        $data = $this->db->get('tbl_karyawan');
        return $data;
    }
    function karyawan_detail($nik){
        return $this->db->get_where('tbl_karyawan',array('nama_departemen'=>$nik))->row();
    } 
   
   public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_karyawan',$id);
		$query = $this->db->get();

		return $query;
	}
    
     public function get_by_name($id)
	{
		$this->db->from('karyawan');
		$this->db->where('nama_departemen',$id);
		$query = $this->db->get();

		return $query->row();
	}
    
    
    public function save($data)
	{
		$this->db->insert('tbl_karyawan', $data);
		return true;
	}
    public function delete_by_name($id)
	{
		$this->db->where('nama_departemen', $id);
		$this->db->delete($this->table);
	}
    
    public function delete_by_id_karyawan($id)
	{
		$this->db->where('id_karyawan', $id);
		$this->db->delete($this->table);
		return true;
	}
    
    public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return true;
	}


}