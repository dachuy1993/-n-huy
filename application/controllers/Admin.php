<?php 
	/**
	* 
	*/
	class admin extends CI_Controller
	{
		function index ()
		{
			$user = $this->session->userdata('user'); 
			$pass = $this->session->userdata('pass');
				$data = array();
				$product = $this->Product_model->get();
				if(isset($user))
				{
					$data['user'] = $user;
					$data['pass'] = $pass;
					$this->load->view('admin', $data); 
				}
				
				// if ($product) {
				// 	$data['product1'] = $product;
				// 	$this->load->view('admin',$data);
				// }
				
				else{
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
					foreach ($login as $key) { 
						$id = $key->nhanvien_id;
					}
					$session = array(
						'user' => $user,
						'pass' =>$pass,
						'id'=>$id,
						);
					$this->session->set_userdata($session);
					redirect('Dieukhien'); 
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