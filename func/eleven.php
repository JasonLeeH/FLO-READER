<?php
$lPad = floor($wlen/2);
$rPad = ceil($wlen/2);
$left = substr($word, 0, -$lPad-3);
$middle = substr($word, -$lPad-3, 1); 
$right = substr($word, $rPad-2, $lPad+2);
$floWord = "       ".$left.ColorCLI::light_red($middle, null, 'null').$right;
?>