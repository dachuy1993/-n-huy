<?php 
/**
*  
*/
class Chitiet_dondh_model extends CI_Model
{
	function getchitiet($dondh_id)
	{
		$this->db->where('Dondh_id',$dondh_id);
		$get = $this->db->get('chitietdondh');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	
	function get() 
	{
		$get = $this->db->get('chitietdondh');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($chitietdondh_id)
	{
		$this->db->where('chitietdondh_id',$chitietdondh_id);
		$get = $this->db->get('chitietdondh');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo_ddh($dondh_id)
	{
		$this->db->where('Dondh_id',$dondh_id);
		$get = $this->db->get('chitietdondh');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function add($data){
		$add = $this->db->insert('chitietdondh',$data);
		if($add){
			return true; 
		}else return false;

	}
	function edit($chitietdondh_id,$edit){
		$this->db->where('chitietdondh_id',$chitietdondh_id);
		$edit = $this->db->update('chitietdondh',$edit);
		if($edit){
			return true; 
		}else return false;

	}
	function delete($chitietdondh_id){
		$this->db->where('chitietdondh_id',$chitietdondh_id);
		$delete = $this->db->delete('chitietdondh');
		if($delete){
			return true;
		}else return false;
	}
	
}
?>