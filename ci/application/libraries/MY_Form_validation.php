<?php
class My_Form_validation extends CI_Form_validation 
{
	function test()
	{
		echo "testing ..";
	}
	
	function strong_pass($value, $params)
	{
		$this->CI->form_validation->set_message('strong_pass', 'The %s is not strong enough');
		
		$score = 0;
		if(preg_match('!\d!', $value))
			$score++;
		
		if(preg_match('![A-z]!', $value))
			$score++;
		
		if(preg_match('!\W!', $value))
			$score++;
		
		if(strlen($value) >= 8)
			$score++;
		
		if($score < $params) 
			return false;
		return true;
	}
}
?>