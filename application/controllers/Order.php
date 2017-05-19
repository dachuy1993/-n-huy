<?php 
	/**
	* 
	*/
	class order extends CI_Controller
	{
		function index ()
		{
			$user = $this->session->userdata('user');
			if(isset($user)){
				$data = array();
				$order = $this->Order_model->get();
				if ($order) {
					$data['order1'] = $order;
				}
				$this->load->view('admin_banhang',$data);
			}else{
				redirect('admin');
			}
			// redirect('home');
		}
		function view($order_id){
			$getinfo = $this->Order_model->getinfo($order_id);
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('dondh',$data);
		}
		function add()
		{
			$ten_sp = $this->input->post('tensp');
			$ngay_mua = $this->input->post('ngaymua');
			$gia_sp = $this->input->post('giasp');
			$ten_kh = $this->input->post('tenkh');
			$sdt = $this->input->post('sodt');
			$diachi_gh = $this->input->post('diachigh');
			$ghi_chu = $this->input->post('ghichu');
			$trang_thai = $this->input->post('mytextarea');
			if(isset($ten_sp) && isset($ngay_mua) && isset($gia_sp) && isset($ten_kh) && isset($sdt) && isset($diachi_gh) && isset($ghi_chu) && isset($trang_thai)){
				//chay len sua
				$data = array(
					'Ten_sp' => $ten_sp,
					'Ngay_lap' => $ngay_mua,
					'Tong_gia' => $gia_sp,
					'Ten_kh' =>$ten_kh,
					'Sodt' => $sdt,
					'Diachi_giaohang' => $diachi_gh,
					'ghi_chu' =>$ghi_chu,
					'Tinh_trang' => $trang_thai,
					);
				$insert = $this->Order_model->add($data);
				redirect('order');
			}
		}
		function edit($Dondh_id)
		{
			$getinfo = $this->Order_model->getinfo($Dondh_id);
			$ten_sp = $this->input->post('tensp');
			$ngay_mua = $this->input->post('ngaymua');
			$gia_sp = $this->input->post('giasp');
			$ten_kh = $this->input->post('tenkh');
			$sdt = $this->input->post('sodt');
			$diachi_gh = $this->input->post('diachigh');
			$ghi_chu = $this->input->post('ghichu');
			$trang_thai = $this->input->post('mytextarea');
			if(isset($ten_sp) && isset($ngay_mua) && isset($gia_sp) && isset($ten_kh) && isset($sdt) && isset($diachi_gh) && isset($ghi_chu) && isset($trang_thai)){
				//chay len sua
				$edit = array(
					'Ten_sp' => $ten_sp,
					'Ngay_lap' => $ngay_mua,
					'Tong_gia' => $gia_sp,
					'Ten_kh' =>$ten_kh,
					'Sodt' => $sdt,
					'Diachi_giaohang' => $diachi_gh,
					'ghi_chu' =>$ghi_chu,
					'Tinh_trang' => $trang_thai,
					);
				$edit = $this->Order_model->edit($Dondh_id,$edit);
				redirect('order');
			}
			if($getinfo){
				$data['getinfo'] = $getinfo; 
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('admin_edit_dondh',$data);
		}
		function delete($Dondh_id)
		{
			$delete = $this->Order_model->delete($Dondh_id);
			redirect('order');
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