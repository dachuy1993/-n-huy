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
			$noidung = $this->Noidung_model->get();
			
			if ($noidung) {
				$data['noidung1'] = $noidung;
			}
			
			//danh muc
			// $product = $this->Product_model->get();
			// if ($product) {
			// 	$data['product1'] = $product;
			// }
			//get sp phong kh
			
			$this->load->view('home',$data);
		}
		function view($nhanvien_id)
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
			$this->load->view('home',$data);
		}
		
	}
 ?>