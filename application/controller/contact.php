<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact extends Controller
{
    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/contact/index.php';
        require APP . 'view/_templates/footer.php';
    }

    // HANDLE FORM SUBMISSION
    public function send()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ' . URL . 'contact');
            exit;
        }

        // Sanitize inputs
        $name     = htmlspecialchars($_POST['name'] ?? '');
        $company  = htmlspecialchars($_POST['company'] ?? '');
        $email    = htmlspecialchars($_POST['email'] ?? '');
        $phone    = htmlspecialchars($_POST['phone'] ?? '');
        $category = htmlspecialchars($_POST['category'] ?? '');
        $message  = nl2br(htmlspecialchars($_POST['message'] ?? ''));

        // LOAD COMPOSER AUTOLOAD
        require APP . '../vendor/autoload.php';

        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';


        try {
            // SMTP CONFIG (your credentials)
            $mail->isSMTP();
            $mail->Host       = 'radi-share.co.ke';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'no-reply@radi-share.co.ke';
            $mail->Password   = 'Aca9Vrpw31n';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            // HEADERS
            $mail->setFrom('info@radi-share.co.ke', 'Radi-Share Website');
            $mail->addAddress('info@radi-share.co.ke');
            $mail->addReplyTo($email, $name);

            // CONTENT
            $mail->isHTML(true);
            $mail->Subject = "Radishare Inquiry Message – {$category}";
            $mail->Body = "
                <h3>Contact Form Submission</h3>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Company:</strong> {$company}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Category:</strong> {$category}</p>
                <p><strong>Message:</strong><br>{$message}</p>
            ";

            $mail->send();

            echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
        } catch (Exception $e) {
            // Return real SMTP error
            echo json_encode(['status' => 'error', 'message' => $mail->ErrorInfo]);
        }
    }
}
