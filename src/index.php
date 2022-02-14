<?php
//first
 for($i=5;$i<=15;$i++){
     echo $i;
     echo "<br>";
 }
 //second
 $x=15;  
$y=30;  
$z=$x+$y;  
echo "Sum: ",$z."<br>";  
//third
$var_1 = "Hello Ced_Commerce";
$var_2 = "Have a nice day!";
echo $var_1." ". $var_2;
//fourth
$marks=100;
if($marks>=60){
echo "First Division";
}
else if($marks<45 && $marks<59)
{
    echo "Second Divison";
}
else if($marks<33 && $marks<44)
{
    echo "Third Divison";
}
else{
    echo "fail";
}
//fifth
$message = "Welcome to the PHP World";
echo $message,"<br>";
//six
$day = "4";

switch ($day) {
    case "1":
        echo "It is Monday!";
        break;
    case "2":
        echo "It is today!";
        break;
    case "3":
        echo "It is Wednesday!";
        break;
	case "4":
        echo "It is Thursday!";
        break;
    case "5":
        echo "It is Friday!";
        break;
    case "6":
        echo "It is Saturday!";
        break;
	case "7":
        echo "It is Sunday!";
        break;
    default:
        echo "Invalid number!"."<br>";
}
//seven
$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>