<?php 
/**
* 
*/
class danhmuc extends CI_Controller 
{
		function index ()
		{
			$user = $this->session->userdata('user'); 
			$data = array();
			$data['user'] = $user;
			$danhmuc = $this->Danhmuc_model->get();
			if ($danhmuc) {
				$data['danhmuc1'] = $danhmuc;
			}
			$this->load->view('admin_danhmuc',$data);
		}
		function getctdm($danhmuc_id)
		{
			$getinfo = $this->Danhmuc_model->getinfo($danhmuc_id);
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "danh mục này k tồn tại";
			}
			$this->load->view('admin_laychitietdm',$data);
		}
		function get_chon($danhmuc_id)
		{
			$getinfo = $this->Danhmuc_model->getinfo($danhmuc_id);
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "danh mục này k tồn tại";
			}
			$this->load->view('admin_nhapkho',$data);
		}
		function view($danhmuc_id)
		{ 
			$danhmuc = $this->Danhmuc_model->get();
			$getdm = $this->Product_model->get_dm($danhmuc_id);
			if($getdm){
				$data['getdm'] = $getdm;  
			}
			$noidung = $this->Noidung_model->get_bv('Bài viết tư vấn');
			
			if ($noidung) {
				$data['noidung1'] = $noidung;
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
		function get($ma_sp)
		{
			$get_msp = substr($ma_sp,0,3);
			$getdmcon = $this->Product_model->get_dmcon($get_msp);
			var_dump($getdmcon);
			if($getdmcon)
			{
				$data['getdmc'] = $getdmcon;
			}
			$noidung = $this->Noidung_model->get();
			
			if ($noidung) {
				$data['noidung1'] = $noidung;
			}
			$this->load->view('chitietdanhmuc',$data);
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
			
			$sanpham = $this->Product_model->get_sp($ma_sp);
			if($sanpham){
				$data['sanpham'] = $sanpham;
			}
			$noidung = $this->Noidung_model->get_bv('Bài viết tư vấn');
			
			if ($noidung) {
				$data['noidung1'] = $noidung;
			}
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