<?php 
/**
* 
*/
class Hoadonban_model extends CI_Model
{
	
	function get() 
	{
		$get = $this->db->get('hoadonban');
		if($get->num_rows()>0)
		{
			return $get->result(); //tra ve duoi dang mang
		}else return false;	
	}
	function getinfo($hoadon_id)
	{
		$this->db->where('hoadon_id',$hoadon_id);
		$get = $this->db->get('hoadonban');
		if($get->num_rows()>0)
		{
			return $get->result(); //tra ve duoi dang mang
		}else return false;	
	}
	function getdate($ngaybd,$ngaykt)
	{
		$this->db->where('Ngay_lap>=',$ngaybd);
		$this->db->where('Ngay_lap<=',$ngaykt);
		$this->db->where('Tinh_trang','1');
		$get = $this->db->get('dondh'); 
		if($get->num_rows()>0)
		{
			return $get->result(); //tra ve duoi dang mang
		}else return false;
	}
}
?>