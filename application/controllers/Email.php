<?php
defined('BASEPATH') or exit('No direct script access allowed');
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
class Email extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function verify()
    {
        $captcha="";
      
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
            $this->load->view('captcha');
        }
        $secretKey = "6LfYsnEaAAAAADRktafMb4EuGaPf72lsQqwwSRiU";
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        if($responseKeys["success"]) {
                $this->send_email();
        } else {
            // $this->load->view('captcha');
        }

    }

    public function send_email()
    {

        $mail = new PHPMailer();

// Load Composer's autoloader

        try {
            //Server settings
            $mail->SMTPDebug = false; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'danijeldoveden.55@gmail.com'; // SMTP username
            $mail->Password = 'la1983belo'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ),
            );
            //Recipients
            $from = $_POST["email"];
            $name = $_POST["name"];
            $body = $_POST["message"];
            $mail->AddReplyTo($from, $name);
            $mail->setFrom($from, $name); // Set the sender of the message.
            $mail->Subject = 'Message from website'; // The subject of the message
            $mail->Body = $body; // Set a
            $mail->addAddress('danijeldoveden.55@gmail.com'); // Add a recipient

            $mail->isHTML(true); // Set email format to HTML
            if ($mail->send()) {

                $this->load->view('email_sent');
            } else {
                $this->load->view('email_not_sent');
            }

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }

}