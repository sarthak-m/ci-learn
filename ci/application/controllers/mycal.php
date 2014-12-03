<?php
class Mycal extends CI_Controller
{
	function display($year = null, $month = null)
	{
		$this->load->model('Mycal_model');
		
		if(!$year) { $year = date('Y'); } 
		if(!$month) { $month = date('m'); }
		
		//$this->Mycal_model->add_calendar_data("2014-11-16",'my birthday');
		
		if($day = $this->input->post('day'))
		{
			//echo $year.$month.$day;
			//die();
			$this->Mycal_model->add_calendar_data(
				"$year-$month-$day",
				$this->input->post('data')
			);
		}
	
		$data['calendar'] = $this->Mycal_model->generate($year, $month);
	
		$this->load->view('mycal_view', $data);
		
	}
}
?>