<?php 
/**
* 
*/
class danhmuc extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	$danhmuc = $this->Danhmuc_model->get();
			
			
	// 		if($danhmuc){
	// 			$data['danhmuc'] = $danhmuc;
	// 		}
	// }


		function index ()
		{
			$data = array();
			$danhmuc = $this->Danhmuc_model->get();
			if ($danhmuc) {
				$data['danhmuc1'] = $danhmuc;
			}
			$this->load->view('admin_danhmuc',$data);
		}
		// function index_ct ()
		// {
		// 	$data = array();
		// 	$danhmuc = $this->Chitiet_dm_model->get();
		// 	if ($danhmuc) {
		// 		$data['danhmuc1'] = $danhmuc;
		// 	}
		// 	$this->load->view('admin_edit_danhmuc',$data);
		// }
		function view($danhmuc_id)
		{
			$danhmuc = $this->Danhmuc_model->get();
			$getdm = $this->Product_model->get_dm($danhmuc_id);
			
			
			if($getdm){
				$data['getdm'] = $getdm;
			}
			if($danhmuc){
				$data['danhmuc'] = $danhmuc;
			}
			$getinfo = $this->Danhmuc_model->getinfo($danhmuc_id);
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "danh mục này k tồn tại";
			}
			$this->load->view('danhmuc',$data);
		}
		function view2($ma_sp)
		{
			
			$danhmuc = $this->Danhmuc_model->get();
			if($danhmuc){
				$data['danhmuc'] = $danhmuc;
			}

			$chitiet_dm = $this->Chitiet_dm_model->get();
			$getctdm = $this->Chitiet_dm_model->get_ctdm($ma_sp);
			if($getctdm){
				$data['getctdm'] = $getctdm;
			}
			// if($catalog){
			// 	$data['catalog'] = $catalog;
			// }
			// $getinfo = $this->Chitiet_dm_model->getinfo($chitiet_dm_id);
			// if($getinfo){
			// 	$data['getinfo'] = $getinfo;
			// }
			// else{
			// 	$data['err'] = "danh mục này k tồn tại";
			// }
			$this->load->view('chitietdanhmuc',$data);
		}
		
		function edit($danhmuc_id)
		{
			// echo 1;
			$getinfo = $this->Danhmuc_model->getinfo($danhmuc_id);
			$danhmuc = $this->Chitiet_dm_model->getinfo($danhmuc_id);
			$tendm = $this->input->post('tensp');
			$maloaisp = $this->input->post('loaisp');
			if(isset($tendm)){
				//chay len sua
				$edit = array(
					'tendanhmuc' => $tendm,
					);
				$edit = $this->Danhmuc_model->edit($danhmuc_id,$edit);
				redirect('danhmuc');
			}
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			if($danhmuc){
				$data['danhmuc'] = $danhmuc;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('admin_edit_danhmuc',$data);
		}
		function delete($danhmuc_id)
		{
			$delete = $this->Danhmuc_model->delete($danhmuc_id);
			redirect('danhmuc');
		}
		function add()
		{
			// echo 1;
			$ten = $this->input->post('tendm');
			if(isset($ten)){
				//chay len sua
				$data = array(
					'tendanhmuc' => $ten,
					);
				$insert = $this->Danhmuc_model->add($data);
				if(isset($insert)){
					redirect('danhmuc');
				}else echo 1;
			}
		} 
	}
	
?>