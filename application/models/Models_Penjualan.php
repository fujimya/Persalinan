<?php
class Models_Penjualan extends CI_Model{

    var $table = 'penjualan';
    
    function list_penjualan(){
    	//$this->db->group_by('CUSTOMER');
        $data = $this->db->get('penjualan');
        return $data;
    }
     function list_hutang(){
        $data = $this->db->get('penjualan');
        return $data;
    }
    function penjualan_detail($faktur){
        return $this->db->get_where('penjualan',array('FAKTUR'=>$faktur))->row();
    } 
   
   public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('KODE',$id);
		$query = $this->db->get();

		return $query;
	}
    
     public function get_by_name($id)
	{
		$this->db->from('penjualan');
		$this->db->where('NAMA',$id);
		$query = $this->db->get();

		return $query->row();
	}
    
    
    public function save($data)
	{
		$this->db->insert('penjualan', $data);
		return true;
	}
    public function delete_by_name($id)
	{
		$this->db->where('NAMA', $id);
		$this->db->delete($this->table);
	}
    
    public function delete_by_kode($id)
	{
		$this->db->where('KODE', $id);
		$this->db->delete($this->table);
		return true;
	}
    
    public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return true;
	}


}