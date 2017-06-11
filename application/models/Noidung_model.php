<?php 
/**
* 
*/
class Noidung_model extends CI_Model
{
	function get()
	{
		$get = $this->db->get('noidung');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($noidung_id){
		$this->db->where('noidung_id',$noidung_id);
		$get = $this->db->get('noidung');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function edit($noidung_id,$edit){
		$this->db->where('noidung_id',$noidung_id);
		$edit = $this->db->update('noidung',$edit);
		if($edit){
			return true;
		}else return false; 
	}
	function add($data){
		$add = $this->db->insert('noidung',$data);
		if($add){
			return true; 
		}else return false; 

	}
	
	function delete($noidung_id){
		$this->db->where('noidung_id',$noidung_id);
		$delete = $this->db->delete('noidung');
		if($delete){
			return true;
		}else return false; 
	}
}
?>