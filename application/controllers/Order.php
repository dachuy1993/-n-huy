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
				$order = $this->Order_model->hdb('0');
				$data['user'] = $user;
				if ($order) {
					$data['order1'] = $order;
				}$order1 = $this->Order_model->hdb('2');
				if ($order1) {
					$data['order2'] = $order1;
				}
				$data['user'] = $user;
				$this->load->view('admin_banhang',$data);

			}else{
				redirect('admin');
			}
			// redirect('home');
		}
		// function hoadonban()
		// {
		// 	$user = $this->session->userdata('user');
		// 	if(isset($user)){
		// 		$data = array();
		// 		$order = $this->Order_model->get();
		// 		$data['user'] = $user;
		// 		if ($order) {
		// 			$data['order1'] = $order;
		// 		}
		// 		$data['user'] = $user;
		// 		$this->load->view('admin_hoadonban',$data);

		// 	}else{
		// 		redirect('admin');
		// 	}
		// }
		
		function hoadonban()
		{
			$user = $this->session->userdata('user');
			if(isset($user)){
				$data = array();
				$order = $this->Order_model->get();
				$data['user'] = $user;
				if ($order) {
					$data['order1'] = $order;
				}
				$data['user'] = $user;
				$this->load->view('admin_hoadonban',$data);

			}else{
				redirect('admin');
			}
		}
		function view($order_id){
			$getinfo = $this->Order_model->getinfo($order_id);
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('dathang',$data);
		}
		function add()
		{
			
			$gia_sp = $this->input->post('giasp');
			$ten_kh = $this->input->post('tenkh');
			$sdt = $this->input->post('sodt');
			$diachi_gh = $this->input->post('diachigh');
			$ghi_chu = $this->input->post('ghichu');
			$trang_thai = $this->input->post('mytextarea');
			if( isset($gia_sp) && isset($ten_kh) && isset($sdt) && isset($diachi_gh) && isset($ghi_chu) && isset($trang_thai)){
				//chay len sua
				$data = array(
					// 'Ngay_lap' => $ngay_mua,
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
		function giaohang($Dondh_id)
		{
			$getinfo = $this->Order_model->getinfo($Dondh_id);
			$edit = array(
				'Tinh_trang' =>'1',
				);
			$edit = $this->Order_model->edit($Dondh_id,$edit);
			$get_sl = $this->Chitiet_dondh_model->getinfo_ddh($Dondh_id);
			$get = $this->Product_model->get();
			foreach ($get as $key) 
			{	
					foreach ($get_sl as $key1) {
						if($key->sanpham_id == $key1->sanpham_id){
							$update = array(
								'Soluong_kho' => $key->Soluong_kho - $key1->Soluongmua,
								);
							$this->Product_model->edit($key->sanpham_id,$update);
						}		
					}
				}

			redirect('order');
			// $this->load->db->
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

		
		//full code them hoa don
    public function save_order(){
        if($this->input->post('ghichu')){
            $ghichu = $this->input->post('ghichu');
        }else{$ghichu = "";}
        $email = $this->input->post('email');
        $name_kh = $this->input->post('name');
        $phone = $this->input->post('phonenumber');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $money = $this->session->userdata('money');
        $ship = 40000;
        $data = array(
            'email' => $email,
            'name' => $name_kh,
            'phone' => $phone,
            'address' => $address,
            'city' => $city,
            'money' => $money,
            'ship' => $ship,
            'ghichu' => $ghichu,
            'active' => 0,
        );
        $insert_order = $this->User_models->insert_order($data); //them tt kh
        if($insert_order == false){
            $err= "Saving order Fail!";
            $err['err'] = $err;
            $this->load->view('thanhtoan',$err);
        }else {
            foreach ($insert_order as $item){}
            $mahoadon = $item->id;
            if($cart = $this->cart->contents()){//show dât cart 
                foreach ($cart as $item){
                    $product = $item['name'];
                    $img = $item['img'];
                    $qty = $item['qty'];
                    $price = $item['price'];
                    $moneypro = $item['subtotal'];
                    $data_product = array(
                        'mahoadon' => $mahoadon,
                        'name' => $product,
                        'img' => $img,
                        'qty' => $qty,
                        'price' => $price,
                        'subtotal' => $moneypro,
                    );
                    $this->User_models->set_order($data_product);
                    $id = $item['id'];//id sp da ban
                    $get_number = $this->Admin_models->get_single($id);//lay dl sp
                    foreach ($get_number as $row){}
                    $number_new = $row->number - $qty;
                    $data_product_new = array(
                        'number' => $number_new,
                    );
                    $this->Admin_models->edit($id,$data_product_new);
                }
            }
            $session = array(
                'mahoadon' => $mahoadon,
            );
            $this->session->set_userdata($session);
            $this->cart->destroy();
            $this->session->unset_userdata('money');
            $this->session->unset_userdata('count');
            redirect('thanks');
        }
    }
	}
 ?>






