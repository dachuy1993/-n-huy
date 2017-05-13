<?php 
	/**
	* 
	*/
	class home extends CI_Controller
	{
		function index ()
		{
			$data = array();
			$product = $this->Product_model->get();
			if ($product) {
				$data['product1'] = $product;
			}
			$this->load->view('home',$data);
		}
		
	}
 ?>