<?php
$lPad = floor($wlen/2)+1;
$rPad = ceil($wlen/2);
$left = substr($word, 0, -$lPad);
$middle = substr($word, -$lPad, 1); 
$right = substr($word, $rPad, $lPad);
$floWord = "    ".$left.ColorCLI::light_red($middle, null, 'null').$right;
?>