<?php
include("lose_file.php");

echo "<a href='babaubagewinn.php'>Losgewinn&uuml;bersicht</a>";

### Babauba Lose einlesen ANFANG
$lose = array();
#zum testen
#$lose[] = 37296;

foreach($lose_file as $file){
	$file_handle = fopen($file, 'r');

	echo "Aktuelle Lose aus Datei: ".basename($file)."<br/ >\r\n";
	$lnbr = 1;
	$count = 0;
	while (!feof($file_handle)) {
	  $line = trim(fgets($file_handle));
	  if($line == "losnummer") { continue; }
	  $lose[] = $line;
	  echo $line ." ";
	  $lnbr++;
	  $count++;
	  if($lnbr == 11){
		$lnbr = 1;
		echo "<br/ >\r\n";
	  }
	}
	echo "<br/>Anzahl: ".$count."<br/><br/>";
}
###  Babauba Lose einlesen ENDE
?>