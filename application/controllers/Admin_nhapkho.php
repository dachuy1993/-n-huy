 <?php 
	/**
	* 
	*/
	class Admin_nhapkho extends CI_Controller
	{
		
		function index ()
		{
			$data = array();
			// hd_nhap
			$hdnhap = $this->session->userdata('hdnhap');
			if(isset($hdnhap)){
				$data['hdnhap'] = $hdnhap;
			}


			// end
			// timkiem
			$list_tk = $this->session->flashdata('list_tk');
			if(isset($list_tk)){
				$data['list_tk'] = $list_tk;
			}
			$err_tk = $this->session->flashdata('err_tk');
			if(isset($err_tk)){
				$data['err_tk'] = $list_tk;
			}
			// end
			//chon
			$list_chon = $this->session->flashdata('list_chon');
			if(isset($list_chon)){
				$data['list_chon'] = $list_chon;
			}

			//end
			//get danhmuc
			$danhmuc = $this->Danhmuc_model->get();
			if ($danhmuc) {
				$data['danhmuc2'] = $danhmuc;
			}
			//end
			$user = $this->session->userdata('user');
			if(isset($user)){
				$kho = $this->Kho_model->get();
				$data['user'] = $user;
				if ($kho) {
					$data['kho1'] = $kho;
				}
			}
			$this->load->library('cart');
			$cart1 = $this->cart->contents();
			$data['cart1'] = $cart1;
			$this->load->view('Admin_nhapkho',$data);
		}

		function add()
		{					
			$id = $this->session->userdata('id');
			if(!isset($id)){
				$id = -1;
			}else{$id --;}
			$tensp = $this->input->post('tensp');
			$anhsp = $this->input->post('userfile');
			$madm = $this->input->post('danhmuc');
			$gianhap = $this->input->post('gianhap');
			$soluong = $this->input->post('soluongnhap');
			$kichthuoc = $this->input->post('kichthuoc');
			$mausac = $this->input->post('mausac');
			$chatlieu = $this->input->post('chatlieu');
			$baohanh = $this->input->post('baohanh');
			$masp = $this->input->post('masp');
			if(isset($tensp) )
			{
				//chay len sua
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
					$nhapkho = array(
					'name' => $tensp,
					'Danhmuc_id' => $madm,
					'id' =>$id,
					'masanpham'=>$masp,
					'price' => $gianhap,
					'Anh_sp' =>$anhsp,
					'qty' => $soluong,
					'Kichthuoc_sp' =>$kichthuoc,
					'Mausac_sp' => $mausac,
					'Chatlieu_sp' =>$chatlieu,
					'Baohanh' => $baohanh,
					);
					$_SESSION['hdnhap'][] = $nhapkho;
					redirect('Admin_nhapkho');
				}
			}
		}
		function add_spc($id)
		{
			$gianhap = $this->input->post('gianhap');
			$soluong = $this->input->post('soluongnhap');
			if(isset($gianhap) && isset($soluong) )
			{
				$getinfo = $this->Product_model->getinfo($id);
				foreach ($getinfo as $key) {};
					$nhapkho = array(
					'name' => $key->Ten_sp,
					'Danhmuc_id' => $key->danhmuc_id,
					'id' =>$id,
					'masanpham'=>$key->ma_sp,
					'price' => $gianhap,
					'Anh_sp' =>$key->Anh_sp,
					'qty' => $soluong,
					'Kichthuoc_sp' =>$key->Kichthuoc_sp,
					'Mausac_sp' => $key->Mausac_sp,
					'Chatlieu_sp' =>$key->Chatlieu_sp,
					'Baohanh' =>$key->Baohanh_sp,
					'upload' =>$key->Anhsp,
					);
					$_SESSION['hdnhap'][] = $nhapkho;
					redirect('Admin_nhapkho');
				}
			
		}

		function timkiem()
		{
			$timkiem = $this->input->post('ndtimkiem');
			$data = $this->Product_model->get_timkiem($timkiem);
			if($data)
			{
				$this->session->set_flashdata('list_tk',$data);
				redirect('Admin_nhapkho');
			}else{
				$data['err_tk'] = "Không tìm thấy dữ liệu";
				// $this->session->set_flashdata('err_tk',$err);
				$this->load->view('Admin_nhapkho',$data);
			}
		}
		function chon($sanpham_id)
		{
			$data = $this->Product_model->getinfo($sanpham_id);
			if($data)
			{
				$this->session->set_flashdata('list_chon',$data);
				redirect('Admin_nhapkho');
			}

		}
		function phieunk() 
		{
			
			$this->load->view('admin_phieunhapkho');
		}
		function inphieu()
		{

			//lay du lieu trong session hd nhap
			// truyen sang view
			$data = array();
			$hdnhap = $this->session->userdata('hdnhap');
			if(isset($hdnhap)){
				$data['hdnhap'] = $hdnhap;
			}
			$user = $this->session->userdata('user');
			if(isset($user)){
				$data['user'] = $user;
			}
			$this->load->library('Pdf');
			$this->load->view('phieunhap',$data);

		}
}
?>