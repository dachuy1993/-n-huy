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
			//lay id max lam mhd
			$this->db->select_max('Dondh_id');
			$id = $this->db->get('dondh');
			if($id->num_rows() > 0){
                return  $id->result();//lay mhd max
            }
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

	//full code them hoa don to
    public function insert_order($data){
        $query = $this->db->insert('tb_hoadon',$data);
        if($query){
            $this->db->select_max('id');
            $id = $this->db->get('tb_hoadon');
            if($id->num_rows() > 0){
                return  $id->result();
            }
        }else return false;
    }
    //end
    //hoa don chiu tiet
    public function set_order($data){
        $query = $this->db->insert('tb_chitiet_hoadon',$data);
        if($query){
            return true;
        }else return false;
    }
    public function edit1($id,$data){
        $this->db->where('id',$id);
        $query = $this->db->update('tb_product',$data);
        if(isset($query)){
            return true;
        }else return false;
    }

 }