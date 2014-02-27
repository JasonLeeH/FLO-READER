<?php
$lPad = floor($wlen/2);
$rPad = ceil($wlen/2);
$left = substr($word, 0, -$lPad-2);
$middle = substr($word, -$lPad+3, 1); 
$right = substr($word, $rPad-1, $lPad+3);
$floWord = "     ".$left.ColorCLI::light_red($middle, null, 'null').$right;
?>