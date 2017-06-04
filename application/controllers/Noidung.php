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
				$data['user'] = $user
				if ($noidung) {
					$data['noidung1'] = $noidung;
				}
				$this->load->view('admin_noidung',$data);
			}else{
			redirect('admin/login');
			}
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
			$noidung = $this->input->post('noidung');
			if(isset($ten) && isset($noidung)){
				//chay len sua
				$edit = array(
					'ten_tieu_de' => $ten,
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
}
?>