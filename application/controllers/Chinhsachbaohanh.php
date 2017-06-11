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
			$noidung = $this->Noidung_model->get();
			
			if ($noidung) {
				$data['noidung1'] = $noidung;
			}
		$this->load->view('chinhsachbaohanh',$data);
	}
}
?>