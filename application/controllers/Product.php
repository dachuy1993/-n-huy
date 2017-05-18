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
			$product = $this->Product_model->get();
			if($product){
				$data['product'] = $product;
			}
			$getinfo = $this->Product_model->getinfo($sanpham_id);
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('sanpham',$data);
		}
		function add()
		{
			// echo 1;
			$tensp = $this->input->post('Ten');
			$giasp = $this->input->post('Giaban');
			$soluong = $this->input->post('Soluong');
			$kichthuoc = $this->input->post('Kichthuoc');
			$mausac = $this->input->post('Mausac');
			$chatlieu = $this->input->post('Chatlieu');
			$baohanh = $this->input->post('mytextarea');
			if(isset($tensp) && isset($giasp) && isset($soluong) && isset($kichthuoc) && isset($mausac) && isset($chatlieu) && isset($baohanh)){
				//chay len sua
				$data = array(
					'Ten_sp' => $tensp,
					'Gia_sp' => $giasp,
					'Soluong_sp' => $soluong,
					'Kichthuoc_sp' =>$kichthuoc,
					'Mausac_sp' => $mausac,
					'Chatlieu_sp' =>$chatlieu,
					'Baohanh_sp' => $baohanh,
					);
				$insert = $this->Product_model->add($data);
				redirect('product'); 
			}
		}
		function edit($sanpham_id) 
		{
			$getinfo = $this->Product_model->getinfo($sanpham_id);
			$ten_sp = $this->input->post('tensp');
			$loai_sp = $this->input->post('loaisp');
			$so_luong = $this->input->post('soluong');
			$gia_sp = $this->input->post('giasp');
			$kich_thuoc = $this->input->post('kichthuoc');
			$mau_sac = $this->input->post('mausac');
			$chat_lieu = $this->input->post('chatlieu');
			$bao_hanh = $this->input->post('baohanh');
			if(isset($ten_sp) && isset($loai_sp) && isset($so_luong) && isset($gia_sp) && isset($kich_thuoc) && isset($mau_sac) && isset($chat_lieu) && isset($bao_hanh)){
				//chay len sua
				$edit = array(
					'Ten_sp' => $ten_sp,
					'Gia_sp' => $gia_sp,
					'Soluong_sp' => $so_luong,
					'Kichthuoc_sp' =>$kich_thuoc,
					'Mausac_sp' => $mau_sac,
					'Chatlieu_sp' => $chat_lieu,
					'maloai_sp' => $loai_sp,
					'Baohanh_sp' =>$bao_hanh,
					);
				$edit = $this->Product_model->edit($sanpham_id,$edit);
				redirect('product');
			}
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('admin_edit_sanpham',$data);
		}
		function delete($sanpham_id)
		{
			$delete = $this->Product_model->delete($sanpham_id);
			redirect('product');
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