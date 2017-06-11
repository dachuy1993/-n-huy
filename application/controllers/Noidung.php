<?php 
/**
* 
*/
class Noidung extends CI_Controller
{
	
	function index ()
		{
			$data = array();
			$user = $this->session->userdata('user');
			if(isset($user)){
				$noidung = $this->Noidung_model->get();
				$data['user'] = $user;
				if ($noidung) {
					$data['noidung1'] = $noidung;
				}
				$this->load->view('admin_noidung',$data);
			}else{
			redirect('admin/login');
			}
		}
		function listnd()
		{
			$data = array();
			$user = $this->session->userdata('user');
			if(isset($user)){
				$noidung = $this->Noidung_model->get();
				$data['user'] = $user;
				if ($noidung) {
					$data['noidung1'] = $noidung;
				}
				$this->load->view('header',$data);
			}else{
			redirect('admin/login');
			}
		}
		function viewtt($noidung_id)
		{
			$getinfo = $this->Noidung_model->getinfo($noidung_id);
			$danhmuc = $this->Danhmuc_model->get();
			// $getdm = $this->Product_model->get_dm($danhmuc_id);
			// if($getdm){
			// 	$data['getdm'] = $getdm;  
			// }
			if($danhmuc){
				$data['danhmuc'] = $danhmuc;
			}
			if($getinfo){
				$data['getinfo'] = $getinfo;
			} 
			else{
				$data['err'] = "nội dùng này k tồn tại";
			}
			$noidung = $this->Noidung_model->get();
			if ($noidung) {
				$data['noidung1'] = $noidung;
			}

			$this->load->view('tintuc',$data);
		}
		function ndthanhtoan()
		{
			$data = array();
			$user = $this->session->userdata('user');
			if(isset($user)){
				$noidung = $this->Noidung_model->get();
				if ($noidung) {
					$data['noidung2'] = $noidung;
				}
				$this->load->view('hinhthucthanhtoan',$data);
			}else{
			redirect('admin/login');
			}
		}
	function edit($noidung_id)
		{
			// echo 1;
			$getinfo = $this->Noidung_model->getinfo($noidung_id);
			$ten = $this->input->post('tennd');
			$danhmuc = $this->input->post('danhmuc');
			$noidung = $this->input->post('noidung');
			if(isset($ten) && isset($noidung) && isset($danhmuc)){
				//chay len sua
				$edit = array(
					'ten_tieu_de' => $ten,
					'danh_muc' =>$danhmuc,
					'noi_dung' => $noidung,
					);
				$edit = $this->Noidung_model->edit($noidung_id,$edit);
				redirect('noidung');
			}
			if($getinfo){
				$data['getinfo'] = $getinfo;
			}
			else{
				$data['err'] = "sản phầm này k tồn tại";
			}
			$this->load->view('admin_edit_noidung',$data); 
		}
	
	function viewadd()
	{
		$this->load->view('admin_add_noidung');
	}
	function add()
	{
		$danhmuc = $this->input->post('danhmuc');
		$tieude = $this->input->post('tentieude');
		$noidung = $this->input->post('noidung');
		if(isset($danhmuc) && isset($tieude) &&isset($noidung))
		{
			$data = array(
			'ten_tieu_de' =>$tieude,
			'noi_dung' =>$noidung,
			'danh_muc' =>$danhmuc,
				);
			$insert = $this->Noidung_model->add($data);
			redirect('Noidung');
		}
	}
	function delete($noidung_id)
	{
		$delete = $this->Noidung_model->delete($noidung_id);
		redirect('Noidung');
	}
}
?>