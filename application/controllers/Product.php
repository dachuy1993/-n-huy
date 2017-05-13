<?php 
	/**
	* 
	*/
	class product extends CI_Controller
	{
		// function index ()
		// {
		// 	$data = array();
		// 	$product = $this->Product_model->get();
		// 	if ($product) {
		// 		$data['product1'] = $product;
		// 	}
		// 	$this->load->view('home',$data);
		// }
		function view($sanpham_id){
			$getinfo = $this->Product_model->getinfo($sanpham_id);
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('sanpham',$data);
		}

		
	}
 ?>