<?php 
/**
* 
*/
class chinhsachbaohanh extends CI_Controller
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
		$this->load->view('chinhsachbaohanh');
	}
}
?>