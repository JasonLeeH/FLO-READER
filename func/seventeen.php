<?php
$lPad = floor($wlen/2);
$rPad = ceil($wlen/2);
$left = substr($word, 0, -$lPad-5);
$middle = substr($word, -$lPad-5, 1); 
$right = substr($word, $rPad-4, $lPad+3);
$floWord = "        ".$left.ColorCLI::light_red($middle, null, 'null').$right;
?>