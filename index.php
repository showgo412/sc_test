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

	$character = 'daisy';

	if (isset($character)) {
		echo $character;
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

