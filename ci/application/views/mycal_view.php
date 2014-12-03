<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>My Calendar</title>
	<style type="text/css" media="screen">
		.calendar {font-family: Arial; font-size: 12px;}
		table.calendar { margin: auto; border-collapse: collapse;}
		
		.calendar .days td { width: 80px; height: 80px; padding: 4px; border: 1px solid #999; vertical-align: top; background-color: #e3e3e3;}
		
		.calendar .days td:hover {background-color: #FFF;}
		
		.calendar .highlight { font-weight: bold; color: #FF0000;}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
		
	</script>
</head>
<body>
	<?php echo $calendar; ?>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.calendar .day').click(function(){
			day_num = $(this).find('.day_num').html();
			day_data = prompt('Enter Event', $(this).find('.content').html());
			if(day_data != '') {
				$.ajax({
					url: window.location,
					type: 'post',
					data: {
						day: day_num,
						data: day_data
					},
					success: function(msg) {
						location.reload();
					}
				});
			}
		});
	});
	</script>
</body>

</html>