<?php 
	/**
	* 
	*/
	class nhanvien extends CI_Controller
	{
		function index ()
		{
			$data = array();
			$user = $this->session->userdata('user');
			if(isset($user)){
				$nhanvien = $this->Nhanvien_model->get();
				$data['user'] = $user;
				if ($nhanvien) {
					$data['nhanvien1'] = $nhanvien;
				}
				$this->load->view('admin_nhanvien',$data);
			}else{
			redirect('admin/login');
			}
		}
		function change($nhanvien_id)
		{
			$getinfo = $this->Nhanvien_model->getinfo($nhanvien_id);
			
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else
			{
				$data['err'] = 'Nhân viên này không tồn tại';
			}
			$this->load->view('admin_thaydoithongtin');
		}
		function edit($nhanvien_id)
		{
			// echo 1;
			$getinfo = $this->Nhanvien_model->getinfo($nhanvien_id);
			$ten = $this->input->post('tennv');
			$diachi = $this->input->post('diachi');
			$sdt = $this->input->post('sodienthoai');
			$taikhoan = $this->input->post('taikhoan');
			$matkhau = $this->input->post('matkhau');
			if(isset($ten) && isset($diachi) && isset($sdt) && isset($taikhoan) && isset($matkhau)){
				//chay len sua
				$edit = array(
					'ho_ten' => $ten,
					'dia_chi' => $diachi,
					'sdt' => $sdt,
					'tai_khoan' =>$taikhoan,
					'mat_khau' => $matkhau,
					);
				$edit = $this->Nhanvien_model->edit($nhanvien_id,$edit);
				redirect('nhanvien');
			}
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('admin_edit_nhanvien',$data);
		}
		function add()
		{
			// echo 1;
			$ten = $this->input->post('Tennv');
			$diachi = $this->input->post('Diachinv');
			$sdt = $this->input->post('Sdt');
			$taikhoan = $this->input->post('Taikhoan');
			$matkhau = $this->input->post('Matkhau');
			if(isset($ten) && isset($diachi) && isset($sdt) && isset($taikhoan) && isset($matkhau)){
				//chay len sua
				$data = array(
					'ho_ten' => $ten,
					'dia_chi' => $diachi,
					'sdt' => $sdt,
					'tai_khoan' =>$taikhoan,
					'mat_khau' => $matkhau,
					);
				$insert = $this->Nhanvien_model->add($data);
				redirect('nhanvien');
			}
		}
		function delete($nhanvien_id)
		{
			$delete = $this->Nhanvien_model->delete($nhanvien_id);
			redirect('nhanvien');
		}
	
	}
 ?>