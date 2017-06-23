<?php 
/**
* 
*/
class Admin_kho extends CI_Controller
{
	
	function index ()
		{
			$data = array();
			$user = $this->session->userdata('user');
			if(isset($user)){
				$kho = $this->Product_model->get();
				$data['user'] = $user;
				if ($kho) {
					$data['kho1'] = $kho;
				}
				$this->load->view('Admin_kho',$data);
			}else{
			redirect('admin/login');
			}
		} 
	function khophieuxuat(){
		$this->load->view('Admin_khophieuxuat');
	}
	function xuatkho($dondh_id)
		{
		$data = array();
			$user = $this->session->userdata('user');
			if(isset($user)){
			$getinfo = $this->Chitiet_dondh_model->getinfo($dondh_id);
			$gettt = $this->Order_model->getinfo($dondh_id);
			$get2 = $this->Chitiet_dondh_model->getchitiet($dondh_id);
			$data['user'] = $user;
			if(isset($get2))
			{
				$data['gettt2'] = $get2;
				}
				else{
					$data['err'] = "sản phầm này k tồn tại";
				}
			}
			
			if($gettt)
			{
					$data['gettt1'] = $gettt; 
				
			 
			if($getinfo){
					$data['getinfo'] = $getinfo;
				}
				else{
					$data['err'] = "sản phầm này k tồn tại";
				}
			$this->load->view('Admin_phieuxuatkho',$data);
			}else{
			redirect('admin/login');
			}
		}
		

	// function nhapkhomoi()
	// 	{
	// 	$data = array();
	// 		$user = $this->session->userdata('user');
			
	// 		if(isset($user)){
	// 			// $nhapkho = $this->Product_model->get();
	// 			$getinfo = $this->Kho_model->get();
	// 			$data['user'] = $user;
	// 			// if ($nhapkho) {
	// 				// $data['kho1'] = $nhapkho;
	// 			//end
	// 			$danhmuc = $this->Danhmuc_model->get();
	// 			if ($danhmuc) {
	// 				$data['danhmuc2'] = $danhmuc;
	// 			}
	// 			//hocphi
	// 			if($getinfo){
	// 			$data['getinfo'] = $getinfo;
	// 			} 
	// 			else{
	// 				$data['err'] = "sản phầm này k tồn tại";
	// 			}
	// 			$this->load->view('Admin_nhapkho',$data);
	// 		}else{
	// 		redirect('admin/login');
	// 		}
		// }
	function nhapkhocu($sanpham_id)
		{
		$data=array();
		$user = $this->session->userdata('user');
			if(isset($user)){
				$getinfo = $this->Product_model->getinfo($sanpham_id);
				$data['user'] = $user;
				if($getinfo){
				$data['getinfo'] = $getinfo;
				} 
				else{
					$data['err'] = "sản phầm này k tồn tại";
				}
				$this->load->view('Admin_nhapkhocu',$data);
			}else{
			redirect('admin/login');
			}
		}
	function add()
		{
		$tensp = $this->input->post('tensp');
		$gianhap = $this->input->post('gianhap');
		$giaban = $this->input->post('giaban');
		$soluong = $this->input->post('soluongnhap');
		$kichthuoc = $this->input->post('kichthuoc');
		$mausac = $this->input->post('mausac');
		$chatlieu = $this->input->post('chatlieu');
		$masp = $this->input->post('masanpham');
		$danhmuc = $this->input->post('danhmuc');
		$baohanh = $this->input->post('baohanh');
		if(isset($tensp) && isset($gianhap) && isset($giaban) && isset($soluong) && isset($chatlieu) && isset($masp) && isset($danhmuc) && isset($baohanh))
		{
			$config['upload_path']          = './public/img/';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
 
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data['upload'] = $this->upload->data();
                        $anhsp = $data['upload']['file_name']; 
					$data = array(
					'Ten_sp' => $tensp,
					'Gia_nhap' => $gianhap,
					'So_luong' =>$soluong,
					'Anh_sp' =>$anhsp,
					'Kichthuoc_sp' =>$kichthuoc,
					'Mausac_sp' =>$mausac,
					'Chatlieu_sp'=>$chatlieu,
					'Ma_sp' =>$masp,
					'Danhmuc_id' =>$danhmuc,
					'Baohanh' =>$baohanh
					); 
					$insert = $this->Kho_model->add($data);
					redirect('Admin_kho');
				}
			}
		}
	
		function get_masp1()
		{
			$danhmuc_id = $this->input->post('danhmuc_id');
			$masp = $this->Chitiet_dm_model->get_masp($danhmuc_id);
			if(count($masp)>0)
			{
				$masp_select_box = ' ';
				$masp_select_box = '<option value="">Select chi tiết ok</option>';
				foreach ($masp as $key) {
				$masp_select_box .='<option value="'.$key->danhmuc_id.'">'.$key->ma_sp.'</option>';
				}
			}
			else
			{
				$masp_select_box = 'huy';
			}
			echo json_encode($masp_select_box);
		}
	}
	

?>