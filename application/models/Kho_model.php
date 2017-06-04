 <?php 
/**
* 
*/
class Kho_model extends CI_Model
{
	
	function get()
	{
		$get = $this->db->get('kho');
		if($get->num_rows() > 0){
			return $get->result();
		}
		else return false;
	}
	function getinfo($kho_id)
	{
		$this->db->where('kho_id',$kho_id);
		$get = $this->db->get('kho');
		if($get->num_rows() > 0){
			return $get->result();
		}
		else return false; 
	} 
	function add($data){
		$add = $this->db->insert('kho',$data);
		if($add){
			return true; 
		}else return false; 
	}
	function edit($kho_id,$edit)
	{
		$this->db->where('kho_id',$kho_id);
		$edit = $this->db->update('kho',$edit);
		if($edit){
			return true;
		}else return false;

	}
} ?>