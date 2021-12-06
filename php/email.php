<?php

if(isset($_POST['email']) && !empty($_POST['email']));

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "lpelodan@cartv.com.br";
$subjet = "SITE Contato CARTV";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:suporte@cartv.com.br"."\r\n".
            "Reply-to:".$email."\r\n".
            "X-mailer:PHP/".phpversion();

if(mail($to,$subjetct,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Houve um erro no envio do seu email.");
}

}

?>