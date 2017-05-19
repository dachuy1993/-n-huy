<?php 
/**
* m
*/
class Nhanvien_model extends CI_Model
{
	
	function get(){
		$get = $this->db->get('nhanvien');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($nhanvien_id){
		$this->db->where('nhanvien_id',$nhanvien_id);
		$get = $this->db->get('nhanvien');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function edit($nhanvien_id,$edit){
		$this->db->where('nhanvien_id',$nhanvien_id);
		$edit = $this->db->update('nhanvien',$edit);
		if($edit){
			return true; 
		}else return false;

	}
	function delete($nhanvien_id){
		$this->db->where('nhanvien_id',$nhanvien_id);
		$delete = $this->db->delete('nhanvien');
		if($delete){
			return true;
		}else return false;
	}
	function add($data){
		$add = $this->db->insert('nhanvien',$data);
		if($add){
			return true; 
		}else return false;

	}
	function login($login){
		$this->db->where('tai_khoan',$login['tai_khoan']);
		$this->db->where('mat_khau',$login['mat_khau']);
		$login = $this->db->get('nhanvien');
		if($login->num_rows() > 0){
			return true;
		}
		else return false;
	}
}

 ?>