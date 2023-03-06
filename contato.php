<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require "vendor/autoload.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer();

    if(isset($name) && isset($email) && isset($phone) && isset($phone) && isset($subject)) {
        /*echo("<p style='color: red;'>Nome: $name</p>");
        echo("<p style='color: red;'>E-mail: $email</p>");
        echo("<p style='color: red;'>Telefone: $phone</p>");
        echo("<p style='color: red;'>Assunto: $subject</p>");
        echo("<p style='color: red;'>Mensagem: $message</p:");*/
        try {
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "wsdesenvolvedorweb@gmail.com";
            $mail->Password = "yphcycxvtmavmqrx";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            $mail->setFrom($email, $name);
            $mail->addAddress("wsdesenvolvedorweb@gmail.com", "Wellington");
            $mail->addReplyTo($email, $name);
            $mail->isHTML(true);
            $mail->Subject = utf8_decode($subject);
            $mail->Body = $message;
            if(empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
                echo("");
            } else {
                $mail->send();
                echo("Mensagem enviada com sucesso!");
            }
        } catch(Exception $error) {
            echo("Erro ao enviar o email! $error");
        }
    }
?>