<?php  
/**
* 
*/
class Hoadonban extends CI_Controller
{
	
	function index ()
		{
			$user = $this->session->userdata('user'); 
			$data = array();
			$data['user'] = $user;
			$hoadonban = $this->Order_model->hdb('1');
			if ($hoadonban) {
				$data['hoadonban1'] = $hoadonban;
			}
			$this->load->view('admin_hoadonban',$data);
		}
	
}
?>