 <?php 
	/**
	* 
	*/
	class Admin_nhapkho extends CI_Controller
	{
		
		function index ()
		{
			$data = array();
			$user = $this->session->userdata('user');
			if(isset($user)){
				$kho = $this->Kho_model->get();
				$data['user'] = $user;
				if ($kho) {
					$data['kho1'] = $kho;
				}
			}
			$this->load->library('cart');
			$cart = $this->cart->contents();
			$data['cart'] = $cart;
			$this->load->view('Admin_nhapkho',$data);
		}
		function view($dondh_id) 
		{
			$data = array();
			$user = $this->session->userdata('user'); 
			$chitiet = $this->Chitiet_dondh_model->getchitiet($dondh_id);
			$data['user'] = $user;
			if ($chitiet) { 
				$data['chitiet2'] = $chitiet;
			}
			$this->load->view('admin_xuatkho',$data);
			 
		}
		function add($sanpham_id)
		{					
			$tensp = $this->input->post('tensp');
			// $anhsp = $this->input->post('userfile');
			$madm = $this->input->post('mytextarea');
			$gianhap = $this->input->post('gianhap');
			$giaban = $this->input->post('giaban');
			$soluong = $this->input->post('soluongnhap');
			$kichthuoc = $this->input->post('kichthuoc');
			$mausac = $this->input->post('mausac');
			$chatlieu = $this->input->post('chatlieu');
			$baohanh = $this->input->post('mytextarea1');
			$masp = $this->input->post('masanpham');
			if(isset($tensp) && isset($madm) && isset($gianhap) && isset($giaban) && isset($soluong) && isset($kichthuoc) && isset($chatlieu) && isset($baohanh) && isset($masp))
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
					$cart = array(
					'Ten_sp' => $tensp,
					'danhmuc_id' => $madm,
					'ma_sp' =>$masp,
					'Gia_sp' => $giasp,
					'Anh_sp' =>$anhsp,
					'Soluong_sp' => $soluong,
					'Kichthuoc_sp' =>$kichthuoc,
					'Mausac_sp' => $mausac,
					'Chatlieu_sp' =>$chatlieu,
					'Baohanh_sp' => $baohanh,
					'Thong_tin_sp' =>$thongtin,
					);
				$this->load->library('cart');
				if ($this->cart->insert($cart)) {
					// $cart = $this->cart->contents();
					// var_dump($cart);
					redirect('Admin_nhapkho');
				}
			}
		}
	}
}
?>