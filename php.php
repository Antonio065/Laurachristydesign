<?php

if (isset($_POST['email']) && !empty($_POST['email']));

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);


$to = "contato@laurachristydesign.com";
$subject = "Contato - laurachristydesign";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From: antonioc_tirlone@hotmail.com". "\r\n".
            "Reply-To:".$email. "\r\n".
            "X=Mailer:PHP/".phpversion();
            

if(mail($to,$subject,$body,$header)){

    echo("E-mail enviado com sucesso!");
}
else{
    echo("O E-mail não pode ser enviado");
}   








?>