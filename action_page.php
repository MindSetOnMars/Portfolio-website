<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    // Set up the email headers
    $to = "walah556@gmail.com";
    $subject = "New message from your website";
    $headers = "From: $name <$email>";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    
    
    
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mailwebsite936@gmail.com';
        $mail->Password = 'cicdemsgxbmsvaog ';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
    
        // Set sender and recipient
        $mail->setFrom('mailwebsite936@gmail.com', 'webMail');
        $mail->addAddress('W.Alhmemedy@zohomail.com', 'webMail');
    
        // Set email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $email_message;
    
        // Send the email
        $mail->send();
        $_SESSION['success'] = true;
        header("location: index.php"); 
        
    } catch (Exception $e) {
        echo 'Email could not be sent. Error: ', $mail->SMTP::DEBUG_SERVER;
    }
   
    }

