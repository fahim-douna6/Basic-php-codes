<?php
$a=100;
$b=6;
$oppr = "7";
if($oppr == "+")
echo "Addition : ",$a+$b;
else if ($oppr== "-")
echo "Substraction",$a-$b;
else if($oppr == "*")
echo "Maltiplication : ",$a*$b;
else if ($oppr=="/")
echo "Division : ", $a/$b;
else if ($oppr=="%")
echo "Mode ",$a%$b;
else
echo "Invalid operator","<br>";
echo "Please Enter Valid operator......."
?>