<?php

$errorMSG = "";
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nom manquant ";
} else {
    $name = $_POST["name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email manquant ";
} else {
    $email = $_POST["email"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message manquant ";
} else {
    $message = $_POST["message"];
}
$EmailTo = "langer.sylvain95@gmail.com";
$Subject = "MARCASSIN - Nouveau message";
// prepare email body text
$Body = "";
$Body .= "Nom: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Une erreure est apparue";
    } else {
        echo $errorMSG;
    }
}
?>