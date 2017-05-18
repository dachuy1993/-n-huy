<?php 
/**
* m
*/
class Product_model extends CI_Model
{
	
	function get(){
		$get = $this->db->get('sanpham');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($sanpham_id){
		$this->db->where('sanpham_id',$sanpham_id);
		$get = $this->db->get('sanpham');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getspcatalog($maloai_sp){
		$this->db->where('maloai_sp',$maloai_sp);
		$get = $this->db->get('sanpham');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;	
	}
	function add($data){
		$add = $this->db->insert('sanpham',$data);
		if($add){
			return true; 
		}else return false; 

	}function edit($sanpham_id,$edit){
		$this->db->where('sanpham_id',$sanpham_id);
		$edit = $this->db->update('sanpham',$edit);
		if($edit){
			return true;
		}else return false;

	}
	function delete($sanpham_id){
		$this->db->where('sanpham_id',$sanpham_id);
		$delete = $this->db->delete('sanpham');
		if($delete){
			return true;
		}else return false;
	}
}

 ?>