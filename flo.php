<?php
	include('cli_color.php');
	$src = file_get_contents('Alice.txt');
	$srcRef = preg_split("/[\s]+/", $src);
	$wordcount = count($srcRef);
	$i=0;
	while ($i<=$wordcount) {
		$word = $srcRef[$i];
		$wlen = strlen($word);
		if ($wlen = 4) {
			$wlen = strlen($word);
			$lPad = floor($wlen/2)+1;
			$rPad = ceil($wlen/2);
			$left = substr($word, 0, -$lPad);
			$middle = substr($word, -$lPad, 1); 
			$right = substr($word, $rPad, $lPad);
			$floWord = "   ".$left.ColorCLI::light_red($middle, null, 'null').$right;
		} else {
		$lPad = floor($wlen/2);
		$left = substr($word, 0, $lPad);
		$middle = substr($word, $lPad, 1);
		$right = substr($word, $lPad + 1);
		$floWord = "  ".$left.ColorCLI::light_red($middle, null, 'null').$right;
		}
		echo str_pad($floWord, 34, " ", STR_PAD_BOTH)."\r";
		$i++;
		usleep(120000);
	}
?>