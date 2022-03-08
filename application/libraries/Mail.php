<?php

require_once APPPATH.'../vendor/autoload.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail{


  public $secrets;
  protected $ci;
  
 public function __construct()
 {
      $this->ci 	 =	& get_instance();
     $this->ci->config->load('secrets',TRUE);
     $this->secrets =	(object)$this->ci->config->item('secrets');


 }


  // send verification email
  public function send_verification_mail($mail_to, $recipient_name, $token){

    $mail_message = 'Dear '. $recipient_name.' , ' ."\r\n";
    $link = "http://localhost/Mikielina/users/Signup/verify_email?token=  $token ";
    // $link  = "https://www.cartlite.co.ke/users/Signup/verify_mail/$recipient_name/$token";
    $mail_message.= 'Click on the following link to get you started <b> '.$link. '</b> <i class="fas fa-smile-wink text-warning"></i> ';
    $mail_message.= '<br> Thanks & Regards';
    $mail_message.= '<br> Cartlite Fashion'; 

    date_default_timezone_set('Etc/UTC');
   $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = $this->secrets->host;
    $mail->Port = $this->secrets->port;
    $mail->SMTPAuth   = true; 
    $mail->SMTPSecure = 'tls';                                  
    $mail->Username = $this->secrets->username;
    $mail->Password = $this->secrets->password;
    $mail->SetFrom($this->secrets->from, $this->secrets->sender);
    $mail->addAddress($mail_to, $recipient_name);     // Add a recipient
    $mail->isHTML(true);
    $mail->Subject = 'Confirm Email';
    $mail->Body    = $mail_message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();

    return true;

} 

public function sendresetmail($mail_to, $recipient_name,$newpassword){
  $mail_to = $mail_to;
  $recipient_name = $recipient_name;



  
  $mail_message = 'Dear '. $recipient_name.' , ' ."\r\n";

  $mail_message.= 'use the following passcode <b> '.$newpassword. '</b>   to recover your password';
  $mail_message.= '<br> Please Update your Password';
  $mail_message.= '<br> Thanks & regards';
  $mail_message.= '<br> Cartlite'; 

  date_default_timezone_set('Etc/UTC');
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->Host = $this->secrets->host;
  $mail->Port = $this->secrets->port;
  $mail->SMTPAuth   = true; 
  $mail->SMTPSecure = 'tls';                                  
  $mail->Username = $this->secrets->username;
  $mail->Password = $this->secrets->password;
  $mail->SetFrom($this->secrets->from, $this->secrets->sender);
  $mail->addAddress($mail_to, $recipient_name);     // Add a recipient
  $mail->isHTML(true);
  $mail->Subject = 'Reset Password';
  $mail->Body    = $mail_message;
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  $mail->send();

  return true;

}

}