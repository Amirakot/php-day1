<!-- include_once("config.php"); -->
<?php


// $data=fread($file,filesize("article.txt"));
// rewind($file);
$f= file("logo.txt");


?>
<?php 
     

       
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
   <?php
   
   
       foreach ($f as $key=>$d){
        $data = explode(",", $d);
     
        
        echo "<h3>visit adress: $data[0]</h3>";
         echo "<h3>ip: $data[1]</h3>";
          echo "<h3>email: $data[2]</h3>";
           echo "<h3>name: $data[3]</h3>";
        

        
        echo"<hr>"; 

        
  
}
   ?>
    
   
</body>
</html>