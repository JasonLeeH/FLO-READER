<?php
$wlen = strlen($word);
$lPad = floor($wlen/2);
$rPad = ceil($wlen/2);
$left = substr($word, 0, -$lPad-2);
$middle = substr($word, -$lPad-2, 1); 
$right = substr($word, $rPad-1, $lPad+2);
$floWord = "      ".$left.ColorCLI::light_red($middle, null, 'null').$right;
?>