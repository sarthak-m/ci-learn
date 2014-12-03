<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Films</title>
	<style type="text/css" media="screen">
	* {
		font-family: Arial;
		font-size: 12px;
	}
	table {
		border-collapse: collapse;
	}
	td, th {
		border: 1px solid #666;
		padding: 4px;
	}
	div {
		margin: 5px;
	}
	.sort_asc:after {
		content: "▲";
	}
	.sort_desc:after {
		content: "▼";
	}
	label {
		display: inline-block;
		width: 120px;
	}
	</style>
</head>
<body>
	
	<?php echo form_open('films/search'); ?>
	<div>
		<?php echo form_label('Title:', 'title'); ?>
		<?php echo form_input('title', set_value('title'), 'id="title"');?>
		
	</div>
	<div>
		<?php echo form_label('Category:', 'category'); ?>
		<?php echo form_dropdown('category', $category_options, set_value('category'), 'id="category"');?>
		
	</div>
	
	<div>
		<?php echo form_label('Length:', 'length'); ?>
		<?php echo form_dropdown('length_comparision', array('gt' => '>', 'gte' => '>=', 'eq' => '=', 'lte' => '<=', 'lt' => '<'), set_value('title'), 'id="length_comparison"');?>
		<?php echo form_input('length', set_value('length')); ?>
		
	</div>
	
	<div>
		<?php echo form_submit('action', 'Search'); ?>
	</div>
	<?php echo form_close(); ?>
	
	<div id="num_rows">
		Found <?php echo $num_results; ?> films
	</div>
	<table>
		<thead>
			<?php foreach ($fields as $header => $display): ?>
				<th <?php if ($sort_by == $header) echo "class =\"sort_$sort_order\""?>>
					<?php echo anchor("films/display/$query_id/$header/" 
					. (($sort_order == 'asc' && $sort_by == $header) ? 'desc' : 'asc')
					, $display); ?>
				</th>
			<?php endforeach; ?>
		</thead>
		
		<tbody>
			<?php foreach ($films as $film): ?>
				<tr>
					<?php foreach ($fields as $header => $display): ?>
						<td><?php echo $film->$header; ?></td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
		
	</table>
	
	<?php if(strlen($pagination)): ?>
		<div id="pagination">
			Pages: <?php echo $pagination; ?>
		</div>
	<?php endif; ?>
	
</body>
</html>