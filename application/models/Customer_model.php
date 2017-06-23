<?php 
/**
* m
*/
class Customer_model extends CI_Model
{
	 
	function get(){
		$get = $this->db->get('khachhang');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($khachhang_id){
		$this->db->where('Khachhang_id',$khachhang_id);
		$get = $this->db->get('khachhang');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function edit($khachhang_id,$edit){
		$this->db->where('Khachhang_id',$khachhang_id);
		$edit = $this->db->update('khachhang',$edit);
		if($edit){
			return true; 
		}else return false;

	}
	function delete($khachhang_id){
		$this->db->where('Khachhang_id',$khachhang_id);
		$delete = $this->db->delete('khachhang');
		if($delete){
			return true;
		}else return false;
	}
	function add($data){
		$add = $this->db->insert('khachhang',$data);
		if($add){
			return true; 
		}else return false;

	}
	function get_kh_no(){
 		$this->db->order_by('Sotienno','DESC');
 		$this->db->where('Sotienno>',0);
		// $this->db->limit($limit);
		$get = $this->db->get('khachhang');
		if($get->num_rows() > 0){
			return $get->result(); 
		}else return false;
 	}
 	function get_tk($ten_kh)
	{
		$this->db->like('Ten_kh',$ten_kh);
		$getinfo = $this->db->get('khachhang');
		if($getinfo->num_rows() > 0){
			return $getinfo->result();
		}else return false;
	}
 	

}

 ?>