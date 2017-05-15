<?php 
	/**
	* 
	*/
	class product extends CI_Controller
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
				$this->load->view('admin_sanpham',$data);
			}else{
				redirect('admin');
			}
			// redirect('home');
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
		function catalog($maloai_sp){
			$getspcatalog = $this->Product_model->getspcatalog($maloai_sp);
			if($getspcatalog){
				$data['getspcatalog'] = $getspcatalog;
			}
			else
			{
				$data['err'] = "Sản phẩm không tồn tại";
			}
			$this->load->view('catalog',$data);

		}
		
	}
 ?>