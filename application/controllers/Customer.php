<?php 
	/**
	* 
	*/
	class customer extends CI_Controller
	{
		function index ()
		{
			$user = $this->session->userdata('user'); 
			$data = array();
			$customer = $this->Customer_model->get();
			$data['user'] = $user;
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
			$tenkh = $this->input->post('Tenkh');
			$diachiemail = $this->input->post('Diachiemail');
			$sdt = $this->input->post('Sdt');
			$tensp = $this->input->post('Tensp');
			$ghichu = $this->input->post('noidung');
			if(isset($tenkh) && isset($sdt) && isset($tensp)){
				//chay len sua
				$data = array(
					'Ten_kh' => $tenkh,
					'Diachi_email' => $diachiemail,
					'Sdt' => $sdt,
					'Ghichu' => $ghichu,
					);

				$insert = $this->Customer_model->add($data);
				$data1 = array(
					'Ten_kh' =>$tenkh,
					'Sodt' =>$sdt,
					'Diachi_email' =>$diachiemail,
					'Ghi_chu' =>$ghichu,
					'Tinh_trang' => "2",
					);
				$insert1 = $this->Order_model->add($data1); 
				// $data2 = array(
				// 	'Ten_sp' =>$tensp,
				// 	'Soluongmua' =>$soluong,
				// 	'Kichthuoc_sp' =>$kichthuoc,
				// 	'Chatlieu_sp' =>$chatlieu,
				// 	'Mausac_sp' =>$mausac,
				// 	);  
				// $insert2 = $this->Chitiet_dondh_model->add($data2);

				redirect('home');
			}
			else echo 1;
		}
		function delete($khachhang_id)
		{
			$delete = $this->Customer_model->delete($khachhang_id);
			redirect('customer');
		}
	
	}
 ?>