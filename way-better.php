<?php
$text= "Creating new order...|
A calzone pizza should be sent to koen.|
The address: a yacht in Antwerp.
The bill is €10.|
Order finished.|

Creating new order...|
A marguerita pizza should be sent to manuele.|
The address: somewhere in Belgium.|
The bill is €5.|
Order finished.|

Creating new order...|
A golden pizza should be sent to students.|
The address: BeCode office.|
The bill is €100.|
Order finished";

$info_array= explode("|",$text);
echo "<pre>";
print_r($info_array);
echo "</pre>";