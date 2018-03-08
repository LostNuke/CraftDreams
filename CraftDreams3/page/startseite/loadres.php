<?php 
	$images = glob('../../img/diashow/*.{jpg,png,gif}', GLOB_BRACE);
	echo json_encode($images);
?>