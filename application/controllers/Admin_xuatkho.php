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
				// $chitiet = $this->Chitiet_dondh_model->getchitiet($dondh_id);
				// // $data['user'] = $user;
				// if ($chitiet) {
				// 	$data['chitiet1'] = $chitiet;
				// }
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
		function inphieu($dondh_id)
		{
			$user = $this->session->userdata('user');
			$getinfo = $this->Chitiet_dondh_model->getinfo($dondh_id);
			$gettt = $this->Order_model->getinfo($dondh_id);
			$get2 = $this->Chitiet_dondh_model->getchitiet($dondh_id);
			if(isset($user)){
				$data['user'] = $user;
			}
			if(isset($get2))
			{
				$data['gettt2'] = $get2;
				}
				else{
					$data['err'] = "sản phầm này k tồn tại";
				}
			
			if($gettt)
			{
					$data['gettt1'] = $gettt; 
				
			 
			if($getinfo){
					$data['getinfo'] = $getinfo;
				}
				else{
					$data['err'] = "sản phầm này k tồn tại";
				}
			$this->load->library('Pdf');
			$this->load->view('phieuxuat',$data);
		}
	}
}
?>