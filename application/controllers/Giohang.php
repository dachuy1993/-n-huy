<?php 
/**
* 
*/
class giohang extends CI_Controller
{
	
	function index()
	{
		$this->load->library('cart');
		$cart = $this->cart->contents();
		$data['cart'] = $cart;
		$this->load->view('giohang',$data);

	}
	
}
 ?>