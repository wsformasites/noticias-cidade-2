<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require "vendor/autoload.php";
    
    $emailNewsletter = $_POST["email-newsletter"];

    $mail = new PHPMailer();
    
    if(isset($emailNewsletter)) {
        //echo("<p style='color: red'>E-mail: $emailNewsletter</p>");
        try {
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "wsdesenvolvedorweb@gmail.com";
            $mail->Password = "yphcycxvtmavmqrx";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            $mail->setFrom($emailNewsletter);
            $mail->addAddress("wsdesenvolvedorweb@gmail.com", "Wellington");
            $mail->addReplyTo($emailNewsletter);
            $mail->isHTML(true);
            $mail->Subject = utf8_decode("Inscrição na Newsletter do Notícias Cidade");
            $mail->Body = "Quero receber notícias personalizadas do Notícias Cidade e me manter bem informado";
            if(empty($emailNewsletter)) {
                echo("");
            } else {
                $mail->send();
                header("Location: http://localhost/noticiascidade/home");
            }
        } catch(Exception $error) {
            echo("Erro ao enviar a mensagem! $error");
        }
    }
?>