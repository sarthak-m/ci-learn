<?php
class Foo
{
	var $CI;
	
	function __construct()
	{
		$this->CI =& get_instance();
		
		echo "constructor was called. <hr />";
	}
	
	function test($value)
	{
		echo "You passed " . $value . "<hr />";
		
		$this->CI->load->library('config');
		
		echo "language is ".$this->CI->config->item('language');
	}
}
