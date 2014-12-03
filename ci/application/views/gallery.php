<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>CI Gallery</title>
	<style type="text/css" media="screen">
	
	#blank_gallery {font-family: Arial; font-size: 10px; font-weight: bold; text-align: center;}
	.thumb {float: left; width: 150px; height: 100px; padding: 10px; margin: 10px; background-color: #ddd;}
	.thumb:hover{ outline: 1px solid #999;}
	img { border: 0;}
	#gallery:after {content: "."; visibility: hidden; display: block; clear: both; height: 0; font-size: 0;}
	
	</style>
	
</head>
<body id="gallery">
	<div id="gallery">
		<?php if(isset($images) && count($images)): 
			foreach($images as $i => $image): 
				if (!$i) continue; // to get rid of .DStore file ?>
			<div class="thumb">
					<a href="<?php echo $image['url']; ?>" >
						<img src="<?php echo $image['thumb_url']; ?>" />
					</a>
			</div>
			
		<?php endforeach; else: ?>
			<div id="blank_gallery">Gallery Empty. Please Upload an Image</div>
		<?php endif; ?> 
	</div>
	
	<div id="upload">
		<?php
		echo form_open_multipart('gallery');
		echo form_upload('userfile');
		echo form_submit('upload', 'Upload');
		echo form_close();
		?>
	</div>
</body>