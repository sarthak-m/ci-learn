<?php
class Captcha extends CI_Controller 
{
	function index()
	{
		
		$this->load->helper('captcha');
		
		$captcha = array(
			'img_path' => './captcha/',
			'img_url' => base_url().'captcha/',
			'img_width' => '300',
			'img_height' => '50',
			'expiration' => '3600' 
			
		);
		
		$img = create_captcha($captcha);
		
		$data['image'] = $img['image'];
		$data['text'] = $img['word'];
		$this->load->view('header_view');
		
		$this->load->view('main_view', $data);
	}
}
?>