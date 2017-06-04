<?php 
	/**
	* 
	*/
	class Admin_xuatkho extends CI_Controller
	{
		
		function index ()
		{
			$data = array();
			$user = $this->session->userdata('user');
			if(isset($user)){
				$kho = $this->Kho_model->get();
				$data['user'] = $user;
				if ($kho) {
					$data['kho1'] = $kho;
				}
				$this->load->view('Admin_xuatkho',$data);
			}else{
			redirect('admin/login');
			}
		}
		function view($dondh_id) 
		{
			$data = array();
			$user = $this->session->userdata('user'); 
			$chitiet = $this->Chitiet_dondh_model->getchitiet($dondh_id);
			$data['user'] = $user;
			if ($chitiet) { 
				$data['chitiet2'] = $chitiet;
			}
			$this->load->view('admin_xuatkho',$data);
			 
		}
	}
?>