<?php
$lPad = floor($wlen/2)+1;
$rPad = ceil($wlen/2);
$left = substr($word, 0, -$lPad+1);
$middle = substr($word, -$lPad+1, 2);
$floWord = "   ".$left.ColorCLI::light_red($middle, null, 'null');
?>