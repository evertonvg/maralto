<?php

//identificação para a chamada da classe

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// if (isset($_POST['enviar']))
// {


// Inclui os arquivos PHPMailer.php e Exception.php e SMTP.php localizados na pasta PHPMailer/src

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/SMTP.php";



// resgatando os dados passados pelo form

$name =$_POST['nome'];
$email_address = $_POST['email'];
$phone = $_POST['telefone'];
// $conteudo = $_POST['message'];

// instanciando a classe
    $mail = new PHPMailer();

//  opçao de idioma, setado como br
    $mail->SetLanguage("br");

// habilitando SMTP
    $mail->IsSMTP();

// enviando como HTML
    $mail->IsHTML(true);

// Pode ser: 0 = não exibe erros, 1 = exibe erros e mensagens, 2 = apenas mensagens
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';

// habilitando autenticação
    $mail->SMTPAuth = true;

// habilitando tranferêcia segura (obrigatório)
     $mail->SMTPSecure = 'tls';
    // $mail->SMTPSecure = 'ssl';

// Configurações para utilização do SMTP do Gmail

    $mail->Host = 'smtp.gmail.com';

    // $mail->Host = "contato@drcallcenter.com.br";

    $mail->Port = 587; // Porta de envio de e-mails do Gmail 587 e hostgator 465

    $mail->Username = 'trexvion@gmail.com';

    $mail->Password = 'vzcyxpnrytrzzbay';

    // $mail->Username = "contato@drcallcenter.com.br";

    // $mail->Password = "callcenter2020";

    $mail->CharSet = "utf-8";

// Remetente da mensagem

    $mail->SetFrom($email_address);

// Endereço de destino do email
    $mail->AddAddress('evertoniee@yahoo.com.br'); 
	
// Endereço para resposta

    // $mail->addReplyTo('noreply@noemail.com');
    $mail->addReplyTo($email_address);

// Assunto e Corpo do email

    $mail->Subject = "Quero entrar em contato";


    $mensagem = "<br>
    Enviado por: ".$email_address." <br>
    Nome = ".$name."<br>
    telefone = ".$phone."<br>";
    // mensagem = ".$conteudo;


    $mail->Body = $mensagem;
// Enviando o email

    if(!$mail->Send())

    {

        $message = "PhpMailer Gmail status: " . $mail->ErrorInfo;

    } else {

        $message = "E-mail SMTP enviado com sucesso por: ".$email_address ;


 }
 return  $message;


?>
