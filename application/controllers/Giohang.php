<?php 
/**
* 
*/
class giohang extends CI_Controller
{
	
	function index()
	{
		$catalog = $this->Danhmuc_model->get();
			if($catalog){
				$data['danhmuc'] = $catalog;
				foreach ($catalog as $key) {
					$chitiet = $key->danhmuc_id;
				}
			}
		$this->load->library('cart');
		$cart = $this->cart->contents();
		$data['cart'] = $cart;
		$this->load->view('giohang',$data);

	}
	function save()
	{
		$this->load->library('cart');
		$hoten = $this->input->post('hoten');
		$email = $this->input->post('email');
		$sdt = $this->input->post('sdt');
		// $tongtien = $this->input->post('tongtien');
		$diachi = $this->input->post('diachi');
		$ghichu = $this->input->post('mytextarea');

		if(isset($hoten) && isset($email) && isset($sdt) && isset($diachi) && isset($ghichu))
		{

			$data = array(
				'Ten_kh' => $hoten,
				'Diachi_email' => $email,
				'Sodt' => $sdt,
				'Diachi_giaohang' => $diachi,
				// 'Tong_gia' =>$tongtien,
				'ghi_chu' => $ghichu,
			);
			$insert = $this->Order_model->add($data); 
			if($insert == false)
			{
				$err= "Saving order Fail!";
	            $err['err'] = $err;
	            $this->load->view('giohang',$err);
			}
			else
			{
				foreach ($insert as $item) {}
				$mahoadon = $item->Dondh_id;
				if($cart = $this->cart->contents()){//show dât cart 
                foreach ($cart as $item){
                    $product = $item['name'];
                    $img = $item['img'];
                    $qty = $item['qty'];
                    $price = $item['price'];
                    // $moneypro = $item['subtotal'];
                    $kt = $item['kt'];
                    $ms = $item['ms'];
                    $cl = $item['cl'];
                    $bh = $item['bh'];
                    $data_product = array(
                        'Dondh_id' => $mahoadon,
                        'Ten_sp' => $product,
                        'Anh_sp' => $img,
                        'Soluongmua' => $qty,
                        'Gia_sp' => $price,
                        // 'subtotal' => $moneypro,
                        'Kichthuoc_sp' =>$kt,
                        'Mausac_sp' =>$ms,
                        'Chatlieu_sp' =>$cl,
                        'Baohanh_sp'=>$bh,
                    );
                    $this->Chitiet_dondh_model->add($data_product);
                    $id = $item['id'];
                    $get_number = $this->Product_model->getinfo($id);
                    foreach ($get_number as $row) {};
                    $number_new = $row->Soluong_sp - $qty;
                    $data_product_new = array(
                        'Soluong_sp' => $number_new,
                    );
                    $this->Product_model->edit($id,$data_product_new);
					}
					$this->cart->destroy();
			redirect('home');
					}
			}

		}
	}
}
 ?>