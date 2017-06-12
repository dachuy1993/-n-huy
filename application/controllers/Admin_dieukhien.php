<?php 
/**
* 
*/
class dieukhien extends CI_Controller
{
	
	function index()
	{
		$user = $this->session->userdata('user');
			if(isset($user)){
				$data = array();
				$data['user'] = $user;
				$this->load->view('admin_dieukhien',$data);

			}else{
				redirect('admin');
			}
	}
}
?>