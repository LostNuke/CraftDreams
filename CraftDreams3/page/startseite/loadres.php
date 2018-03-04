<?php 
	$images = glob('img/Footericons/*.{jpg,png,gif}', GLOB_BRACE);
	echo json_encode($images);   
?>