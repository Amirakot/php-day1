<?php
$email=$_POST['email'];
$name=$_POST['name'];
$date=date( "F j Y g:i a" );
$ip= $_SERVER['SERVER_ADDR'];
$arraydata=[];
array_push($arraydata,$date);
array_push($arraydata,$ip);
array_push($arraydata,$email);
array_push($arraydata,$name);
$text=implode(",",$arraydata);
$text .=PHP_EOL;


  $fo=fopen("logo.txt","a+");
  fwrite($fo,$text);


 fclose($fo);

// fwrite($fo,$counter);
// echo "new vistors = $counter";

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