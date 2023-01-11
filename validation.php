
<?php
$error="";
$email="";
$message="";
$flag=true;

if(count ($_POST) > 0){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
   if(empty($name) || empty($email)||empty($message)){
    $error ="all fileds shoudnot be empty ";
    echo "<br>";

}
if(strlen($name)>10){
    $error ="name must less than 100 character";
    echo "<br>";

}
if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $error .="$email is  not a valid email address";
  echo "<br>";
}
 

if(strlen($message)>250)
{
    $error .="$message must less than 250 character";
}
if($error == "")
{
echo"thank you for concating us ";
echo "<br>";    
foreach($_POST as $key => $value){
    
        echo "<strong> $key</strong>:$value <br>";
    }
}
die;
}



?>


