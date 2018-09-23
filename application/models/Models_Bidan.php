<?php
class Models_Bidan extends CI_Model{

    var $table = 'tbl_bidan';
    
    function list_Bidan(){
        $data = $this->db->get('tbl_bidan');
        return $data;
    }
    function Bidan_detail($nik){
        return $this->db->get_where('tbl_bidan',array('nama_bidan'=>$nik))->row();
    } 
   
   public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_bidan',$id);
		$query = $this->db->get();

		return $query;
	}
    
     public function get_by_name($id)
	{
		$this->db->from('Bidan');
		$this->db->where('nama_bidan',$id);
		$query = $this->db->get();

		return $query->row();
	}
    
    
    public function save($data)
	{
		$this->db->insert('tbl_bidan', $data);
		return true;
	}
	public function delete($id)
	{
		$this->db->where('id_bidan', $id);
		$this->db->delete($this->table);
	}
    
    public function delete_by_name($id)
	{
		$this->db->where('nama_bidan', $id);
		$this->db->delete($this->table);
	}
    
    public function delete_by_id_bidan($id)
	{
		$this->db->where('id_bidan', $id);
		$this->db->delete($this->table);
		return true;
	}
    
    public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return true;
	}


}