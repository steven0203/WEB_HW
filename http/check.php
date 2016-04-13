<?php
$json = '[
{"id" : "e94024024", "name" :  "王傛},
{"id" : "f74016027", "name" : "吳炘珉" },
{"id" : "xxxxxxx","name" :  "xxxxxxx"}
                     ]'
for(int i=0;i<3;i++){
if($_GET['key1'] == $json[i].id){
	$temp  = $json[i].name
}}

echo "<font size=\"5\" color=\"green\">Welcome ".$_GET['key1']."</font><br>";
echo "<font size=\"5\" color=\"green\">Your name is ".$temp. "</font><br>";
echo "<input type=\"button\" value=\"check\" onclick=\"check()\">";

?>
