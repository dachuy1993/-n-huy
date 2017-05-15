<?php 
	/**
	* 
	*/
	class saler extends CI_Controller
	{
		function index ()
		{
			$data = array();
			$order = $this->Order_model->get();
			if ($order) {
				$data['order1'] = $order;
			}
			$this->load->view('admin_banhang',$data);
		}
		function edit($khachhang_id)
		{
			$getinfo = $this->Customer_model->getinfo($khachhang_id);
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
			$this->load->view('admin_edit_khachhang',$data);
		}
		function delete($khachhang_id)
		{
			$getinfo = $this->Customer_model->getinfo($khachhang_id);
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
			$this->load->view('admin_khachhang',$data);
		}
	
	}
 ?>