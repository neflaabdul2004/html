<?php
$students = array("Nefla"=>"22", "Lechu"=>"19", "Ridhu"=>"20", "Achu"=>"23", "Aami"=>"18");
echo "<h3>Original Array:</h3>";
print_r($students);
asort($students);
echo "<h3> Ascending Order:</h3>";
print_r($students);
echo "<br><br>";
arsort($students);
echo "<h3>Descending Order:</h3>";
print_r($students);
?>


