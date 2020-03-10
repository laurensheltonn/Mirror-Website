<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php



function newCalc($z) {
    $newnr = $z * 0.50; 
    echo "Here is 50% of what you wrote: " .$newnr; 
 }

 $z = 200;
newCalc($z);

echo "<br>";

$s = 20;
newCalc($s);









?>



</body>
</html>