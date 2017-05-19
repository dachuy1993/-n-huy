<?php 
	/**
	* 
	*/
	class hoadonban extends CI_Controller
	{
		function index ()
		{
			$data = array();
			$hoadonban = $this->Hoadonban_model->get();
			if ($hoadonban) {
				$data['hoadonban1'] = $hoadonban;
			}
			
			$this->load->view('admin_hoadonban',$data);
		}
	}
?>