<?php 
/**
* 
*/
class chitiet_dondh extends CI_Controller
{
	function index ()
		{
			$data = array();
			$user = $this->session->userdata('user'); 
			if(isset($user)){
				$chitietdondh = $this->Chitiet_dondh_model->get();
				$data['user'] = $user;
				if ($chitietdondh) {
					$data['chitietdondh1'] = $chitietdondh;
				}
				$this->load->view('admin_chitietdondh',$data);
			}else{
			redirect('admin/login');
			}
		} 
	function view($dondh_id)
	{
		$data = array();
		$user = $this->session->userdata('user'); 
		$chitiet = $this->Chitiet_dondh_model->getchitiet($dondh_id);
		$data['user'] = $user;
		if ($chitiet) {
			$data['chitiet1'] = $chitiet;
		}
		$this->load->view('admin_chitietdondh',$data);
		 
	}
	function viewhdb($dondh_id){
		$data = array();
		$user = $this->session->userdata('user'); 
		$chitiet = $this->Chitiet_dondh_model->getchitiet($dondh_id);
		$data['user'] = $user;
		if ($chitiet) {
			$data['chitiet1'] = $chitiet;
		}
		$this->load->view('admin_chitiethdb',$data);
	}
} 
?>