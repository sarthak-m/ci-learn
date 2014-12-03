<?php
class Files extends CI_Controller 
{
	function Files()
	{
		parent::__construct();
		$this->load->helper('directory');
		//$this->output->enable_profiler(TRUE);
		//$this->db->get('glpi_alerts');
	}

	function display()
	{
		$data['files'] = (directory_map(BASEPATH));
		
		$this->load->view('files_view', $data);
	}
}

?>