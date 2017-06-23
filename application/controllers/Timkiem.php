 <?php 
/**
* 
*/
class Timkiem extends CI_Controller
{
	function index ()
		{
 			
			$ten_tk = $this->input->post('timkiem');
			if(isset($ten_tk)){
					$data = array(
					'Ten_tk'=>$ten_tk, 
					);
				
				$insert = $this->Timkiem_model->add($data);
				$getinfo1 = $this->Timkiem_model->get_tk($ten_tk);
				$danhmuc = $this->Danhmuc_model->get();
				$noidung = $this->Noidung_model->get_bv('Bài viết tư vấn'); 
			
				if ($noidung) {
					$data['noidung1'] = $noidung;
				}
				if($danhmuc){
				$data['danhmuc'] = $danhmuc;
				}
				if($getinfo1) 
				{
					$data['getinfo1'] = $getinfo1; 
				}
				else{
					$data['err'] = "từ cần tìm k tồn tại";
				}
				$data['timkiem'] = $ten_tk;

				$this->load->view('timkiem',$data);
			}
			else echo 1;
		}
	
	 
}
 ?>