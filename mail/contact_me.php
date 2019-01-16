<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
      echo "No arguments Provided!";
      return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];


// Create the email and send the message
$to = 'riccardo.tassinari96@gmail.com';

$subject = "Messaggio ricevuto dal sito:  $name";

$body = "Messaggio ricevuto dal form del tuo sito.\n".
        "Nome: $name\n".
        "Email: $email_address\n". 
        "Messaggio:\n$message";

mail($to,$subject,$body);
return true;			
?>