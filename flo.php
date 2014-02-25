<?php
	$src = file_get_contents('Alice.txt');
	$srcRef = preg_split("/[\s]+/", $src);
	$wordcount = count($srcRef);
	$i=0;
	while ($i<=$wordcount) {
		$word = $srcRef[$i];
		$wlen = strlen($word);
		$lPad = floor($wlen/2)+1;
		$rPad = ceil($wlen/2)-1;
		$lWord = substr($word, 0, -$lPad);
		$rWord = substr($word, -$rPad, 0);
		$floWord = $lWord.$rWord;
		echo str_pad($word, 23, " ", STR_PAD_BOTH)."\r";
		$i++;
		usleep(200000);
	}
?>