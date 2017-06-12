<?php 
/**
* 
*/
class Gioithieu extends CI_Controller
{
	function index ()
		{
			$data = array();
			$danhmuc = $this->Danhmuc_model->get();
			if($danhmuc){
				$data['danhmuc'] = $danhmuc; 
			}
			$noidung = $this->Noidung_model->get_bv('Bài viết tư vấn');
			if ($noidung) {
				$data['noidung1'] = $noidung;
			}
			$product = $this->Product_model->get();
			if($product){ 
				$data['product'] = $product;
			}
			$user = $this->session->userdata('user');
			if(isset($user)){
				$gioithieu = $this->Noidung_model->get();
				if ($gioithieu) {
					$data['gioithieu1'] = $gioithieu;
				}
				$noidung = $this->Noidung_model->get();
			
				$this->load->view('gioithieu',$data);
			}else{
			redirect('admin/login'); 
			}
		}
}
?>