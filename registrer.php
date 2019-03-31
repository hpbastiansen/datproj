<?php 
	$file_handle = fopen('data.txt', 'a');
	fwrite($file_handle, "test\n");
	fclose($file_handle);
?>