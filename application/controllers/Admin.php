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
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			if(isset($user) && isset($pass)){
				if($user == "admin" && $pass == "admin"){
					$session = array(
						'user' => $user,
					);
					$this->session->set_userdata($session);
					redirect('admin');
				}
			}
			$this->load->view('login');
		}
		function logout(){
			$this->session->sess_destroy();
			redirect('admin');
		}
	}
 ?>