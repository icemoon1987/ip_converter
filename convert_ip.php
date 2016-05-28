
<?php

require "IP.class.php";
require "Region.php";

$converter = new IP();
$region = new Region();

while(!feof(STDIN))
{
	$line = trim(fgets(STDIN));

	if($line != "")
	{
		$result = $converter->find($line);

		echo $line;
		echo "\t";
		echo $result[0];
		echo "\t";
		echo $result[1];
		echo "\t";
		echo $region->province2id($result[1]);
		echo "\t";
		echo $result[2];
		echo "\t";
		echo $region->city2id($result[2]);
		echo "\n";
	}
}

?>
