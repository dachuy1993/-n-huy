<?php 
/**
* 
*/
class Dieukhien extends CI_Controller
{
	
	function index ()
		{
			$user = $this->session->userdata('user'); 
				$data = array();
				$product = $this->Product_model->get();
				
				if(isset($user))
				{
					$data['user'] = $user;
					$order = $this->Order_model->get_ddh_end('2');
					if ($order) {
						$data['order1'] = $order;
						}
					$hoadonban = $this->Order_model->hdb('1');
					if ($hoadonban) {
						$data['hoadonban1'] = $hoadonban;
					}

					$product1 = $this->Product_model->get_sp_chaynhat('2');
					if($product1){
						$data['product1'] = $product1;
					} 
						$this->load->view('admin_dieukhien', $data);
					}
				else{ 
					redirect('admin/login');
				}
		}
	function dieukhien1()
		{
			$user = $this->session->userdata('user'); 
				$data = array();
				$product = $this->Product_model->get();
				
				if(isset($user))
				{
					$data['user'] = $user;
					$order = $this->Order_model->get_ddh_end('2');
					if ($order) {
						$data['order1'] = $order;
						}
					$hoadonban = $this->Order_model->hdb('1');
					if ($hoadonban) {
						$data['hoadonban1'] = $hoadonban;
					}
					$product1 = $this->Product_model->get_sp_xemnhieu('2');
					if($product1){
						$data['product1'] = $product1;
					}
						$this->load->view('admin_dieukhien1', $data);
					}
				else{ 
					redirect('admin/login');
				}
		}
	function dieukhien2()
	{
		{
			$user = $this->session->userdata('user'); 
				$data = array();
				$product = $this->Product_model->get();
				
				if(isset($user))
				{
					$data['user'] = $user;
					$order = $this->Order_model->get_ddh_end('2');
					if ($order) {
						$data['order1'] = $order;
						}
					$hoadonban = $this->Order_model->hdb('1');
					if ($hoadonban) {
						$data['hoadonban1'] = $hoadonban;
					}
					$customer2 = $this->Customer_model->get();
					if($customer2){
						$data['customer2'] = $customer2;
					}
					$customer = $this->Customer_model->get_kh_no(); 
					if($customer){ 
						$data['customer1'] = $customer;
					}
						$this->load->view('admin_dieukhien2', $data);
					}
				else{ 
					redirect('admin/login');
				}
		}
	}

}
?>