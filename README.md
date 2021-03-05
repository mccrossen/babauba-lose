# Babauba-lose
Zur einfachen Verwaltung der Babauba-Lose. Bei jeder Lieferung des österreichischen Bekleidungshersteller Babauba wird ein Los beigelegt. Viele KäuferInnen haben deshalb eine Menge solcher Lose, welche auf der Webseite https://babauba.de/gewinnlose jeden Monat überprüft werden müssten. 

## Funktionsweise
Das Skript [babaubagewinn.php](./babaubagewinn.php) ließt diese monatlichen Gewinner-Lose von der Original-Webseite aus und vergleicht diese mit dem Inhalt der Losdateien. Die Losdateien sind in der Skriptdatei [lose_file.php](./lose_file.php) hinterlegt. Die mitgelieferte Standard-Losdatei heißt losnummern.txt und wird zeilenweise mit den Babaubalosen befüllt. Das Skript [babaubalose.php](./babaubalose.php) gibt einen Überblick in welcher Losdatei sich die Losnummern befinden. 
