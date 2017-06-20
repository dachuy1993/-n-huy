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
				$getinfo = $this->Timkiem_model->get_tk($ten_tk);
				if($getinfo)
				{
					$data['getinfo1'] = $getinfo;
				}
				else{
					$data['err'] = "từ cần tìm k tồn tại";
				}
				$this->load->view('timkiem.php');
			}
			else echo 1;
		}
	
	 
}
 ?>