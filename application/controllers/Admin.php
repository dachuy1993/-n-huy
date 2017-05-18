<?php 
	/**
	* 
	*/
	class admin extends CI_Controller
	{
		function index ()
		{
			$user = $this->session->userdata('user');
			if(isset($user)){
				$data = array();
				$product = $this->Product_model->get();
				if ($product) {
					$data['product1'] = $product;
				}
				$this->load->view('admin',$data);
			}else{
				redirect('admin/login');
			}
		}
		function kh ()
		{
			$data = array();
			$customer = $this->Customer_model->get();
			if ($customer) {
				$data['customer1'] = $customer;
			}
			$this->load->view('admin',$data);
		}
		function login()
		{
			$data = array();
			$nhanvien = $this->Nhanvien_model->get();
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			if(isset($user) && isset($pass)){
				$login = array(
					'tai_khoan' => $user,
					'mat_khau' => $pass,
					);
				$login = $this->Nhanvien_model->login($login);
				if($login){
					$session = array(
						'user' => $user,
						);
					$this->session->set_userdata($session);
					redirect('admin');
				}else $data['err'] = "Loi";
				}
			$this->load->view('login',$data);
		}
		function logout(){
			$this->session->sess_destroy();
			redirect('admin');
		}
	}
 ?>