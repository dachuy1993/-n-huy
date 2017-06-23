<?php 
/**
* 
*/
class Timkiem_model extends CI_Model
{
	
	function get()
	{
		$get = $this->db->get('timkiem');
		if($get->num_row()>0){
			return $get->result();
		}
		else
			return false;
	}
	function getinfo1($id_timkiem)
	{
		$this->db->where('id_timkiem',$id_timkiem);
		$getinfo = $this->db->get('timkiem');
		if($getinfo->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function get_tk($ten_tk)
	{
		$this->db->like('Ten_sp',$ten_tk);
		$getinfo = $this->db->get('sanpham');
		if($getinfo->num_rows() > 0){
			return $getinfo->result();
		}else return false;
	}
	function add($data)
	{
		$add = $this->db->insert('timkiem',$data);
		if($add){
			return true; 
		}else return false; 
	}
	function getinfo2($ten_tk)
	{
		$this->db->where('Ten_tk',$ten_tk);
		$getinfo = $this->db->get('timkiem');
		if($getinfo->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function demluot($ten_tk){
		$this->db->where('Ten_tk',$ten_tk);
		$getinfo2 = $this->db->get('timkiem');
		if($getinfo2->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function edit($id_timkiem,$edit)
	{
		$this->db->where('id_timkiem',$id_timkiem);
		$edit = $this->db->update('timkiem',$edit);
		if($edit){
			return true;
		}else return false;
	}
}
?>