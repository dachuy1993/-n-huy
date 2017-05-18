<?php 
/**
* m
*/
class Order_model extends CI_Model
{
	
	function get(){
		$get = $this->db->get('dondh');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false;
	}
	function getinfo($dondh_id){
		$this->db->where('Dondh_id',$dondh_id);
		$get = $this->db->get('dondh');
		if($get->num_rows() > 0){
			return $get->result();
		}else return false; 
	}
	function add($data)
	{
		$add = $this->db-> insert('dondh', $data);
		if($add){
			return true;
		}
		else return false;
	}
	function edit($dondh_id,$edit){
		$this->db->where('Dondh_id',$dondh_id);
		$edit = $this->db->update('dondh',$edit);
		if($edit){
			return true;
		}else return false;

	}
	function delete($dondh_id){
		$this->db->where('Dondh_id',$dondh_id);
		$delete = $this->db->delete('dondh');
		if($delete){
			return true;
		}else return false;
	}

 }