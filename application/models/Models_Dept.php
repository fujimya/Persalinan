<?php
class Models_Dept extends CI_Model{

    var $table = 'tbl_departemen';
    
    function list_dept(){
        $data = $this->db->get('tbl_departemen');
        return $data;
    }
    function dept_detail($nik){
        return $this->db->get_where('tbl_departemen',array('nama_departemen'=>$nik))->row();
    } 
   
   public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_departemen',$id);
		$query = $this->db->get();

		return $query;
	}
    
     public function get_by_name($id)
	{
		$this->db->from('dept');
		$this->db->where('nama_departemen',$id);
		$query = $this->db->get();

		return $query->row();
	}
    
    
    public function save($data)
	{
		$this->db->insert('tbl_departemen', $data);
		return true;
	}
    public function delete_by_name($id)
	{
		$this->db->where('nama_departemen', $id);
		$this->db->delete($this->table);
	}
    
    public function delete_by_id_departemen($id)
	{
		$this->db->where('id_departemen', $id);
		$this->db->delete($this->table);
		return true;
	}
    
    public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return true;
	}


}