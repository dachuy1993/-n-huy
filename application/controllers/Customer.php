<?php 
	/**
	* 
	*/
	class customer extends CI_Controller
	{
		function index ()
		{
			$data = array();
			$customer = $this->Customer_model->get();
			if ($customer) {
				$data['customer1'] = $customer;
			}
			$this->load->view('admin_khachhang',$data);
		}
		
		function edit($khachhang_id)
		{
			// echo 1;
			$getinfo = $this->Customer_model->getinfo($khachhang_id);
			$ten = $this->input->post('tenkh');
			$diachiemail = $this->input->post('diachiemail');
			$sdt = $this->input->post('sodienthoai');
			$diachigiaohang = $this->input->post('diachigiaohang');
			$ghichu = $this->input->post('ghichu');
			if(isset($ten) && isset($diachiemail) && isset($sdt) && isset($ghichu)){
				//chay len sua
				$edit = array(
					'Ten_kh' => $ten,
					'Diachi_email' => $diachiemail,
					'Sdt' => $sdt,
					'Diachi_giaohang' =>$diachigiaohang,
					'Ghichu' => $ghichu,
					);
				$edit = $this->Customer_model->edit($khachhang_id,$edit);
				redirect('customer');
			}
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('admin_edit_khachhang',$data);
		}
		function add()
		{
			// echo 1;
			$ten = $this->input->post('Tenkh');
			$diachiemail = $this->input->post('Diachiemail');
			$sdt = $this->input->post('Sdt');
			$diachigiaohang = $this->input->post('Diachigiaohang');
			$ghichu = $this->input->post('Ghichu');
			if(isset($ten) && isset($diachiemail) && isset($sdt) && isset($ghichu)){
				//chay len sua
				$data = array(
					'Ten_kh' => $ten,
					'Diachi_email' => $diachiemail,
					'Sdt' => $sdt,
					'Diachi_giaohang' =>$diachigiaohang,
					'Ghichu' => $ghichu,
					);
				$insert = $this->Customer_model->add($data);
				redirect('customer');
			}
		}
		function delete($khachhang_id)
		{
			$delete = $this->Customer_model->delete($khachhang_id);
			redirect('customer');
		}
	
	}
 ?>