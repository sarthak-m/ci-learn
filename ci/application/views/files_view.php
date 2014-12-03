<?php echo doctype('html5'); ?>

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Directory</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
	<style type="text/css">
	body { font: 14px Arial;}
	.folder { background-image: url(<?php echo base_url(); ?>images/folder.png); background-repeat: no-repeat; }
	.file { background-image: url(<?php echo base_url(); ?>images/file.png); background-repeat: no-repeat; }
	ul { list-style: none; cursor: pointer; padding-left: 20px;}
	li { padding-left: 20px; margin:2px;}
	</style>
</head>
<body>
	<?php // echo json_encode($files); ?>
	<div id="files">
		
	</div>
	<script type="text/javascript">
	$(document).ready(function() {
		var files = <?php echo json_encode($files); ?>;
		var file_tree = build_file_tree(files);
		//var something = 'something';
		//something.appendTo("#files");
		file_tree.appendTo('#files');
		//$('#files').html(file_tree);
		//$('#files').html(something);
		function build_file_tree(files) {
			var tree = $('<ul>');
			
			for (x in files) {
				if(typeof files[x] == "object") {
					var span = $('<span>').html(x).appendTo(
						$('<li>').appendTo(tree).addClass('folder')					);
					var subtree = build_file_tree(files[x]).hide();
					span.after(subtree);
					span.click(function(){
						$(this).parent().find('ul:first').toggle();
					});
				} else {
					$('<li>').html(files[x]).appendTo(tree).addClass('file');
				}
			}
			return tree;
			
		}
	});
	</script>
</body>

</html> 