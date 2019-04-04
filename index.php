<?php
echo "";
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
test02();
function test02()
{
	for($i=0;10>$i;$i++)
	{	
		echo $i.PHP_EOL;
	}
}

test();

