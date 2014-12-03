<?php
class Pagination extends CI_Controller {
	
	function index()
	{
		$this->load->library('pagination');
		$this->load->library('table');
		
		$this->table->set_heading('ID', 'The title', 'Writer', 'Content');
		
		$config['base_url'] = 'http://localhost/ci/index.php/pagination/index';
		$config['total_rows'] = $this->db->get('data')->num_rows();
		$config['per_page'] = 3;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		
		$data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3));
		
		$this->load->view('pagination_view', $data);
	}
}
?>