<?php
	include('cli_color.php');
	$src = file_get_contents('./books/Alice.txt') ;
	$srcRef = preg_split('/[\s]/', str_replace('“', '\'', str_replace('-', ' -', $src)), 0, PREG_SPLIT_NO_EMPTY);
	$wordcount = count($srcRef);
	$i=0;
	include('wpm.php');
	$delay = $wpm500;
	while ($i<=$wordcount) {
		$word = $srcRef[$i];
		$wlen = strlen($word);
		include('pad.php');
		include('breath.php');
		include('display.php');
		$i++;
		usleep($delay);
	}
?>