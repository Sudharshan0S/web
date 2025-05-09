	<?php

	echo "<h1 style='text-align:center'> Count Page </h1>" ;

	

	// This is simple XD

	$name = 'counter.txt' ;
	$c = file_get_contents($name) ;
	echo "The number of users visited : ".$c ;
	file_put_contents($name, $c+1);


?>
