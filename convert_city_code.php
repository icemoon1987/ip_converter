
<?php

require "Region.php";

$region = new Region();

while(!feof(STDIN))
{
	$line = trim(fgets(STDIN));

	if($line != "")
	{
		echo $region->id2city($line);
		echo "\n";
	}
}

?>
