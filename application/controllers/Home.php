<?php 
	/**
	* 
	*/
	class home extends CI_Controller
	{
		function index ()
		{
			$data = array();
			//danh mục
			$catalog = $this->Danhmuc_model->get();
			if($catalog){
				$data['danhmuc'] = $catalog;
				foreach ($catalog as $key) {
					$chitiet = $key->danhmuc_id;
				}
			}
			//danh muc
			$product = $this->Product_model->get();
			if ($product) {
				$data['product1'] = $product;
			}
			$this->load->view('home',$data);
		}
		
	}
 ?>