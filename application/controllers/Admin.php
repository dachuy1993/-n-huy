<?php 
	/**
	* 
	*/
	class admin extends CI_Controller
	{
		function index ()
		{
			$data = array();
			$product = $this->Product_model->get();
			if ($product) {
				$data['product1'] = $product;
			}
			$this->load->view('admin',$data);
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
	}
 ?>