<?php

function test()
{
	$x = 1;
	$y = 1;
	if ($x == $y) {
		$y = $x;
	}
	for($i=0;10>$i;$i++)
	{
		echo $i.PHP_EOL;
	}
}

test();

