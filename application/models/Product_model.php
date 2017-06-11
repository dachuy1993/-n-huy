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
	function get_sp($abc)
	{
		$this->db->where('ma_sp',$abc);
		$getdm =$this->db->get('sanpham');
		if($getdm->num_rows() > 0){
			return $getdm->result();
		}else return false;	
	}
	function get_dm($danhmuc_id){
		$this->db->where('danhmuc_id',$danhmuc_id);
		$get = $this->db->get('sanpham');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;	
	}
	function get_dm_home($danhmuc_id){
		$this->db->order_by('sanpham_id','DESC');
		$this->db->limit(6);
		$this->db->where('danhmuc_id',$danhmuc_id);
		$get = $this->db->get('sanpham');
		if($get->num_rows() > 0){
			return $get->result(); 
		}else return false;	
	}
	function get_list(){
		$this->db->order_by('Soluong_sp','ASC');
		$get = $this->db->get('sanpham');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function get_ctdm($ma_sp)
	{
		$this->db->where('ma_sp',$ma_sp);
		$get = $this->db->get('chitietdanhmuc');
		if($get->num_rows()>0){
			return $get->result();
		}
		else return false;
	}
	function add($data){
		$add = $this->db->insert('sanpham',$data);
		if($add){
			return true; 
		}else return false; 

	}
	function edit($sanpham_id,$edit){
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