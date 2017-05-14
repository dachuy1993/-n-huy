<?php 
	/**
	* 
	*/
	class product extends CI_Controller
	{
		function index ()
		{
			$data = array();
			$product = $this->Product_model->get();
			if ($product) {
				$data['product1'] = $product;
			}
			$this->load->view('admin_sanpham',$data);
		}
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
		function edit($sanpham_id)
		{
			$getinfo = $this->Product_model->getinfo($sanpham_id);
			$ten = $this->input->post('tensp');
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			// if(isset($ten)){
			// 	echo $ten;die();
			// }
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('admin_edit_sanpham',$data);
		}
		function delete($sanpham_id)
		{
			$getinfo = $this->Product_model->getinfo($sanpham_id);
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else
			{
				$data['err'] = "Sản phẩm không tồn tại";
			}
			$this->load->view('admin_sanpham',$data);
		}
		
	}
 ?>