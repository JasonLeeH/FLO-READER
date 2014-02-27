<?php
$lPad = floor($wlen/2);
$rPad = ceil($wlen/2);
$left = substr($word, 0, -$lPad-4);
$middle = substr($word, -$lPad-4, 1); 
$right = substr($word, $rPad-3, $lPad+3);
$floWord = "        ".$left.ColorCLI::light_red($middle, null, 'null').$right;
?>