<?php
$babauba_los_url = 'https://babauba.de/gewinnlose';
include("lose_file.php");

### Babauba URL auslesen ANFANG
$data = file_get_contents($babauba_los_url);
$dom = new domDocument;
@$dom->loadHTML($data);
$dom->preserveWhiteSpace = false;
$tables = $dom->getElementsByTagName('table');
$headlines = $dom->getElementsByTagName('h2');

### Babauba URL auslesen ENDE

### Babauba Lose einlesen ANFANG
$lose = array();
#zum testen
#$lose[] = 37296;

foreach($lose_file as $file){
	$file_handle = fopen($file, 'r');

	while (!feof($file_handle)) {
		$lose[] = trim(fgets($file_handle));
	}
	
	fclose($file_handle);
}
###  Babauba Lose einlesen ENDE

echo "Anzahl der <a href='babaubalose.php'>Lose</a>: ".count($lose)."<br>";
for($i=0;$i<$tables->length;$i++){
	$rows = $tables->item($i)->getElementsByTagName('tr');
	$head = $headlines->item($i);
	echo utf8_decode($head->nodeValue);
	$firstrow = true;
	
	foreach ($rows as $row) {
		$cols = $row->getElementsByTagName('td');
		
		if($firstrow){
			$loscol = 0;
			foreach($cols as $col){
				if(trim($col->nodeValue) == "Losnummer"){ break;}
				$loscol++;
			}
			$firstrow = false;
		}
        #echo $loscol;
		
		$wert = trim($cols[$loscol]->nodeValue);
		#if($i==9) {print_r($cols);}
        if(in_array($wert,$lose)) {
			echo " <b>GEWONNEN ".$wert."</b>";
		} else {
			echo " ".$wert;
		}
		
}
echo "<br><!--".$i."-->\r\n"; 
}
?> 