<?php 
/**
* m
*/
class Order_model extends CI_Model
{
	
	function get(){
		$this->db->where('Tinh_trang','Đã chuyển hàng');
		$get = $this->db->get('dondh');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($dondh_id){
		$this->db->where('dondh_id',$dondh_id);
		$get = $this->db->get('dondh');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
}

 ?>