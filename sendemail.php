 
 <?php

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])  ){

$msg="Name: ".$_POST['name']."\n"."Email: ".$_POST['email']."Category: ".$_POST['category']."\n"."Message: ".$_POST['message']."\n";
$to="karansingla.06@gmail.com";
$sub="Contact Form";

mail($to,$sub,$msg);

header('Location: index.html');
}



