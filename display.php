<?php
	if (($period !== false) || ($question !== false) || ($exclaim !== false) || ($semi !== false) || ($colon !== false)) {
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
		usleep($delay+($delay/7));
	} else {
		echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
		echo str_pad($floWord, 33, " ", STR_PAD_BOTH)."\n";
		echo str_pad('-----------|------------------', 33, " ", STR_PAD_BOTH)."\n";
		echo "\n\r";
	}
?>