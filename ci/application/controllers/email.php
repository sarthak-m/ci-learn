<?php

/**
* SENDS EMAIL WITH GMAIL
*/

class Email extends CI_Controller
{
	function index()
	{
	
		$this->load->view('newsletter_view');
	
	}
	
	function send()
	{
	
		$this->load->library('form_validation');
		
		//field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
					
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('newsletter_view');		
		}
		else
		{
			//validation has pass. Now send the email
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			
			$this->load->library('email');
			$this->email->set_newline("\r\n");
		
			$this->email->from('sarthak.dsy@gmail.com');
			$this->email->reply_to('sarthak.dsy@gmail.com', '"Sarthak dsy"');
			$this->email->to($email);
			$this->email->subject('Test Newsletter signup Confirmation');
			$this->email->message('you\'ve now signed up');
			
			$path = $this->config->item('server_root');
			$file = $path . '/ci/attachments/yourinfo.txt';
			
			//$this->email->attach($file);
			
			if($this->email->send())
			{
				$this->load->view('signup_confirm');
			}
			else
			{
				show_error($this->email->print_debugger());
			}
			
		}
		
	}
}
		
		
