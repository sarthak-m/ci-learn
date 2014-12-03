<?php
class Test extends CI_Controller
{
	function area_of_circle($radius)
	{
		$this->load->helper('math');
		
		echo "A circle wih radius " . $radius . " has area " . circle_area($radius);
	}
	
	function new_library()
	{
		$this->load->library('Foo');
		
		$this->foo->test('hello');
	}
	
	function form()
	{
		$this->load->library('Form_validation');
		
		//$this->form_validation->test();
		
		$this->load->vieW('form_test');
	}
	
	function form_submit()
	{
		$this->load->library('Form_validation');
		
		$this->form_validation->set_rules('username', 'username', 'required|alpha_numeric|min_length[6]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]|strong_pass[3]');
		
		if(!$this->form_validation->run())
			{ $this->load->view('form_test');}
		else
			echo 'success';
		//...
	}
	
}
?>