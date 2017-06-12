<?php 
/**
* 
*/
class chinhsachbaohanh extends CI_Controller
{
	
	function index()
	{
		$data = array();
			$catalog = $this->Danhmuc_model->get();
			
			if($catalog){
				$data['danhmuc'] = $catalog;
				foreach ($catalog as $key) {
					$chitiet = $key->danhmuc_id;
				}
			}
			$noidung = $this->Noidung_model->get_bv('Bài viết tư vấn');
			
			if ($noidung) {
				$data['noidung1'] = $noidung;
			}
			$noidung = $this->Noidung_model->get_bv('Chính sách bảo hành');
			
			if ($noidung) {
				$data['noidung2'] = $noidung;
			}
		$this->load->view('chinhsachbaohanh',$data);
	}
}
?>