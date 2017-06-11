<?php 
/**
* 
*/
class Dieukhien extends CI_Controller
{
	
	function index ()
		{
			$user = $this->session->userdata('user'); 
				$data = array();
				$product = $this->Product_model->get();
				
				if(isset($user))
				{
					$data['user'] = $user;
					 $order = $this->Order_model->get_ddh_end('2');
					if ($order) {
						$data['order1'] = $order;
						}
						$this->load->view('admin_dieukhien', $data);
				}
				
				else{
					redirect('admin/login');
				}
		}
		}
?>