cl<?php 
	/**
	* 
	*/
	
class Chitiet_dm_model extends CI_Model
{
		
		function get(){
		$get = $this->db->get('chitietdanhmuc');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($danhmuc_id){
		$this->db->where('danhmuc_id',$danhmuc_id);
		$get = $this->db->get('chitietdanhmuc');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function get_ctdm($ma_sp){
		$this->db->where('ma_sp',$ma_sp);
		$get = $this->db->get('chitietdanhmuc');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	// function edit($danhmuc_id,$edit){
	// 	$this->db->where('danhmuc_id',$danhmuc_id);
	// 	$edit = $this->db->update('danhmuc',$edit);
	// 	if($edit){
	// 		return true;
	// 	}else return false;

	// }
	// function delete($danhmuc_id){
	// 	$this->db->where('danhmuc_id',$danhmuc_id);
	// 	$delete = $this->db->delete('danhmuc');
	// 	if($delete){
	// 		return true;
	// 	}else return false;
	// }
	// function add($data){
	// 	$add = $this->db->insert('danhmuc',$data);
	// 	if($add){
	// 		return true;
	// 	}else return false;

	// }
	}
?>