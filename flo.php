<?php
	include('cli_color.php');
	$src = file_get_contents('Alice.txt');
	$srcRef = preg_split('/[\s]/', str_replace('-', ' -', $src), 0, PREG_SPLIT_NO_EMPTY);
	$wordcount = count($srcRef);
	$i=0;
	$wpm250 = '240000';
	$wpm300 = '200000';
	$wpm350 = '171429';
	$wpm400 = '150000';
	$wpm450 = '133333';
	$wpm500 = '120000';
	$delay = $wpm400;
	while ($i<=$wordcount) {
		$word = $srcRef[$i];
		$wlen = strlen($word);
		if ($wlen == 1) {
			include('./func/1.php');
		}
		else if ($wlen == 2) {
			include('./func/two.php');
		}
		else if ($wlen == 3) {
			include('./func/three.php');
		}
		else if ($wlen == 4) {
			include('./func/four.php');
		}
		else if ($wlen == 5) {
			include('./func/five.php');
		}
		else if ($wlen == 6) {
			include('./func/six.php');
		}
		else if ($wlen == 7) {
			include('./func/seven.php');
		}
		else if ($wlen == 8) {
			include('./func/eight.php');
		}
		else if ($wlen == 9) {
			include('./func/nine.php');
		}
		else if ($wlen == 10) {
			include('./func/ten.php');
		}
		else if ($wlen == 11) {
			include('./func/eleven.php');
		}
		else if ($wlen == 12) {
			include('./func/twelve.php');
		}
		else if ($wlen == 13) {
			include('./func/thirteen.php');
		}
		else if ($wlen == 14) {
			include('./func/fourteen.php');
		}
		else if ($wlen == 15) {
			include('./func/fifteen.php');
		}
		else if ($wlen == 16) {
			include('./func/sixteen.php');
		}
		else if ($wlen == 17) {
			include('./func/seventeen.php');
		}
		$period = strpos($word, '.');
		$question = strpos($word, '?');
		$exclame = strpos($word, '!');
		$semi = strpos($word, ';');
		$colon = strpos($word, ':');
		$comma = strpos($word, ',');
		if (($period !== false) || ($question !== false) || ($exclame !== false) || ($semi !== false) || ($colon !== false)) {
			echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
			echo str_pad($floWord, 33, " ", STR_PAD_BOTH)."\n";
			echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
			echo "\n\r";
			usleep($delay);
			echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
			echo str_pad(' ', 33, " ", STR_PAD_BOTH)."\n";
			echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
			echo "\n\r";
			usleep($delay);
		} else if ($comma !== false) {
			echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
			echo str_pad($floWord, 33, " ", STR_PAD_BOTH)."\n";
			echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
			echo "\n\r";
			usleep($delay+($delay/6));
		} else {
			echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
			echo str_pad($floWord, 33, " ", STR_PAD_BOTH)."\n";
			echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
			echo "\n\r";
		}
		$i++;
		usleep($delay);
	}
?>