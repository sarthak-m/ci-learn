<!DOCTYPE html>

<html lang="en">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>untitled</title>
	<style type="text/css" media="screen">
	#container {width: 600px; margin: auto;}
	table {width: 600px; margin-bottom: 10px;}
	td {border-right: 1px solid #aaaaaa; padding: 1em;}
	td:last-child { border-right: none;}
	th { text-aling: left; padding: 1em; background: #cac9c9; border-bottom: 1px solid white; border-right: 1px solid #aaaaaa;}
	#pagination a, #pagination strong {background: #e3e3e3; padding: 4px 7px; text-decoration: none; border: 1px solid #cac9c9; color: #292929; font-size: 13px;}
	#pagination strong, #pagination a:hover {font-weight: normal; background: #cac9c9;}
	</style>
</head>
<body>
	<div id="container">
		<h1>Super Pagination with Code Igniter</h1>
		
		<?php echo $this->table->generate($records); ?>
		<?php echo $this->pagination->create_links(); ?>
	</div>
</body>
</html>