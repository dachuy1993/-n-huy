<?php 
	/**
	* 
	*/
	
class Danhmuc_model extends CI_Model
{
		
	function get(){
		$get = $this->db->get('danhmuc');//goi het CSDL
		if($get->num_rows() > 0){
			return $get->result(); //tra ve duoi dang mang
		}else return false;
	}
	function getinfo($danhmuc_id){
		$this->db->where('danhmuc_id',$danhmuc_id);
		$get = $this->db->get('danhmuc');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function edit($danhmuc_id,$edit){
		$this->db->where('danhmuc_id',$danhmuc_id);
		$edit = $this->db->update('danhmuc',$edit);
		if($edit){
			return true;
		}else return false;

	}
	function delete($danhmuc_id){
		$this->db->where('danhmuc_id',$danhmuc_id);
		$delete = $this->db->delete('danhmuc');
		if($delete){
			return true;
		}else return false;
	}
	function add($data){
		$add = $this->db->insert('danhmuc',$data);
		if(isset($add)){
			return true;
		}else return false;

	}
}
?>