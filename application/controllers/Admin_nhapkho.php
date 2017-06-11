 <?php 
	/**
	* 
	*/
	class Admin_nhapkho extends CI_Controller
	{
		
		function index ()
		{
			$data = array();
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
		function add()
		{					
			$id = $this->session->userdata('id');
			if(!isset($id)){
				$id = -1;
			}
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
					$cart1 = array(
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
					$this->load->library('cart');
					if ($this->cart->insert($cart1)) 
						{
							$id--;
							$this->session->set_userdata('id',$id);
						$cart1 = $this->cart->contents();
						var_dump($cart1);
						redirect('Admin_nhapkho');
						}
					else echo 2;
				}
			}
		}
}
?>