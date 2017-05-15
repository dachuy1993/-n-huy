<?php 
	/**
	* 
	*/
	class catalog extends CI_Controller
	{
		
		function index ()
		{
			$data = array();
			$catalog = $this->Catalog_model->get();
			if ($catalog) {
				$data['catalog1'] = $catalog;
			}
			$this->load->view('admin_danhmuc',$data);
		}
		function edit($danhmuc_id)
		{
			// echo 1;
			$getinfo = $this->Catalog_model->getinfo($danhmuc_id);
			$tendm = $this->input->post('tensp');
			$maloaisp = $this->input->post('loaisp');
			if(isset($tendm) && isset($maloaisp)){
				//chay len sua
				$edit = array(
					'tendanhmuc' => $tendm,
					'maloai_sp' => $maloaisp,
					);
				$edit = $this->Catalog_model->edit($danhmuc_id,$edit);
				redirect('catalog');
			}
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('admin_edit_danhmuc',$data);
		}
		
		function delete($danhmuc_id)
		{
			$delete = $this->Catalog_model->delete($danhmuc_id);
			redirect('catalog');
		}
		function add()
		{
			// echo 1;
			$ten = $this->input->post('tendm');
			$maloaidm = $this->input->post('maloaidm');
			if(isset($ten) && isset($maloaidm)){
				//chay len sua
				$data = array(
					'tendanhmuc' => $ten,
					'maloai_sp' => $maloaidm,
					);
				$insert = $this->Catalog_model->add($data);
				redirect('catalog');
			}
		}
	}
?>