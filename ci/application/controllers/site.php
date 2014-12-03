<?php

class Site extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->is_logged_in();
	}
	/*
	function index()
	{
		$data = array();
		
		if($query = $this->site_model->get_records())
		{
			$data['records'] = $query;
		}
		
		$this->load->view('options_view', $data);
	}
	
	function create()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'contents' => $this->input->post('content')
		);
		
		$this->site_model->add_record($data);
		$this->index();
	}
	
	function update()
	{
		$data = array(
			'title' => 'My freshly UPDATE title',
			'contents' => 'Content should go here. it is updated.'
		);
		
		$this->site_model->update_record($data);
	}
	
	function delete()
	{
		$this->site_model->delete_row();
		$this->index();
	
	}
	*/
	function members_area()
	{
		$data['main_content'] = 'members_area' ;
		$this->load->view('includes/template', $data);
	}
	
	function is_logged_in()
	{
		$this->load->library('session');
		
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'you dont have access. <a href="../login">Login</a>';
			die();
		}
	}
	
}
