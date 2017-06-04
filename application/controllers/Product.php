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
				$product = $this->Product_model->get_list();
				$data['user'] = $user;
				if ($product) {
					$data['product1'] = $product;
				}
				$this->load->view('admin_sanpham',$data);
			}else{
				redirect('admin'); 
			}
			// redirect('home');
		}
		function getsp()
		{
			$user = $this->session->userdata('user');
			if(isset($user)){
				$data = array();
				$product = $this->Product_model->get();
				if ($product) {
					$data['product2'] = $product;
				}
				$this->load->view('admin_sanpham',$data);
			}else{
				redirect('admin'); 
			}
		}
		function view($sanpham_id){  
			$danhmuc = $this->Danhmuc_model->get(); 
			if($danhmuc){
				$data['danhmuc'] = $danhmuc; 
			}

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
		function view1($sanpham_id)
		{
			$danhmuc = $this->Danhmuc_model->get();
			$getinfo = $this->Product_model->getinfo($sanpham_id);
			if ($getinfo) {
				$data['getinfo'] = $getinfo;
			}
			$this->load->view('giohang',$data);
		}
		function add()
		{
			// echo 1;
			$tensp = $this->input->post('Ten');
			// $anhsp = $this->input->post('userfile');
			$madm = $this->input->post('mytextarea');
			$giasp = $this->input->post('Giaban');
			$soluong = $this->input->post('Soluong');
			$kichthuoc = $this->input->post('Kichthuoc');
			$mausac = $this->input->post('Mausac');
			$chatlieu = $this->input->post('Chatlieu');
			$baohanh = $this->input->post('mytextarea1');
			$thongtin = $this->input->post('thongtin');
			$masp = $this->input->post('masp');
			if(isset($tensp) && isset($madm) && isset($giasp) && isset($soluong) && isset($kichthuoc) && isset($chatlieu) && isset($baohanh) && isset($masp)){
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
					$data = array(
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
				$insert = $this->Product_model->add($data);
				redirect('product'); 
                        
                }
				
			}
		}
		function editlx($sanpham_id)
		{
			$getinfo = $this->Product_model->getinfo($sanpham_id);
			$lx = $luot_xem;
			if (isset($lx)) {
				$edit = array(
					'Luot_xem' =>$lx,
					);
				$edit = $this->Product_model->edit($sanpham_id,$edit);
			}
			

		}
		function edit($sanpham_id) 
		{
			$getinfo = $this->Product_model->getinfo($sanpham_id);
			$ten_sp = $this->input->post('tensp');
			$ma_sp = $this->input->post('masp');
			$so_luong = $this->input->post('soluong');
			$gia_sp = $this->input->post('giasp'); 
			$kich_thuoc = $this->input->post('kichthuoc'); 
			$mau_sac = $this->input->post('mausac');
			$chat_lieu = $this->input->post('chatlieu');
			$bao_hanh = $this->input->post('baohanh');
			$thong_tin = $this->input->post('thongtin');
			if(isset($ten_sp) && isset($ma_sp) && isset($so_luong) && isset($gia_sp) && isset($kich_thuoc) && isset($mau_sac) && isset($chat_lieu) && isset($bao_hanh)){
				//chay len sua
				$edit = array(
					'Ten_sp' => $ten_sp,
					'Gia_sp' => $gia_sp,
					'Soluong_sp' => $so_luong,
					'Kichthuoc_sp' =>$kich_thuoc,
					'Mausac_sp' => $mau_sac,
					'Chatlieu_sp' => $chat_lieu,
					'ma_sp' => $ma_sp,
					'Baohanh_sp' =>$bao_hanh,
					'Thong_tin_sp'=>$thong_tin,
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
		function buy($sanpham_id)
		{
			$getinfo = $this->Product_model->getinfo($sanpham_id);
			if($getinfo){
				foreach ($getinfo as $key) {};
				$cart = array(
					'id'=>$key->sanpham_id,
					'name'=>$key->Ten_sp,
					'price' =>$key->Gia_sp,
					'qty' =>1,
					'img'=>$key->Anh_sp,
					'kt' =>$key->Kichthuoc_sp,
					'ms' =>$key->Mausac_sp,
					'cl' =>$key->Chatlieu_sp,
					'bh' =>$key->Baohanh_sp,
					);
					
				$this->load->library('cart');
				if ($this->cart->insert($cart)) {
					// $cart = $this->cart->contents();
					// var_dump($cart);
					redirect('giohang');
				}
			}
		}
		function remove($rowid)
		{
			$this->load->library('cart');
			if ($rowid==="all")
                {
                    $this->cart->destroy();
                }
            else
                {
                    $data = array(
                        'rowid' => $rowid,
                        'qty' => 0
                    );
                $this->cart->update($data);
                }
            redirect('giohang');
		}
		function update_cart()
		{
			$this->load->library('cart');
			$cart_info = $_POST['cart'] ;
            foreach( $cart_info as $id => $cart)
                {
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                    $data = array(
                    'rowid' => $rowid,
                    'price' => $price,
                    'amount' => $amount,
                    'qty' => $qty
                    );       
                    $this->cart->update($data);
                }
           redirect('giohang');
        }
	}
 ?>