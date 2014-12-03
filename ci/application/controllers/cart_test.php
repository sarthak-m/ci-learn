<?php
class Cart_test extends CI_Controller
{
	function add()
	{
		$data = array(
			'id' => '43',
			'name' => 'Mac',
			'qty' => 2,
			'price' => 1299.99,
			'options' => array('Size' => '13"')
		);
		$this->cart->insert($data);
		echo "adding";
	}
	
	function show() 
	{
		$cart = $this->cart->contents();
		echo '<pre>';
		print_r($cart);
		$this->total();
	}
	
	function update()
	{
		$data = array(
			'rowid' => 'bf586a4bab99780881923ed127c06952',
			'qty' => '3'
		);
		$this->cart->update($data);
		echo "updated";
	}
	
	function remove()
	{
		$data = array(
			'rowid' => 'bf586a4bab99780881923ed127c06952',
			'qty' => '0'
		);
		$this->cart->update($data);
		echo "removed";
	}
	
	function total()
	{
		echo "You total bill amount is : " .$this->cart->total();
	}
	
	function destroy()
	{
		$this->cart->destroy();
		echo "cart emptied";
	}
}
?>