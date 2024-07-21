<?php

use PHPMailer\PHPMailer;
use PHPMailer\Exception;
use PHPMailer\SMTP;

require 'vendor/autoload.php';

class PHP_Email_Form {
  public $to;
  public $from_name;
  public $from_email;
  public $subject;
  public $smtp;
  private $messages = array();
  public $ajax = false;

  public function add_message($content, $label, $priority = 0) {
    $this->messages[] = array('content' => $content, 'label' => $label, 'priority' => $priority);
  }

  public function send() {
    if (!isset($this->smtp)) {
      return $this->send_via_mail();
    } else {
      return $this->send_via_smtp();
    }
  }

  private function send_via_mail() {
    $message = "";
    foreach ($this->messages as $msg) {
      $message .= $msg['label'] . ": " . $msg['content'] . "\n";
    }

    $headers = "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";
    return mail($this->to, $this->subject, $message, $headers);
  }

  private function send_via_smtp() {
    $mail = new PHPMailer(true);

    try {
      // Server settings
      $mail->isSMTP();
      $mail->Host = $this->smtp['host'];
      $mail->SMTPAuth = true;
      $mail->Username = $this->smtp['username'];
      $mail->Password = $this->smtp['password'];
      $mail->SMTPSecure = $this->smtp['encryption'];
      $mail->Port = $this->smtp['port'];

      // Recipients
      $mail->setFrom($this->from_email, $this->from_name);
      $mail->addAddress($this->to);

      // Content
      $mail->isHTML(false);
      $mail->Subject = $this->subject;
      $body = "";
      foreach ($this->messages as $msg) {
        $body .= $msg['label'] . ": " . $msg['content'] . "\n";
      }
      $mail->Body = $body;

      $mail->send();
      return true;
    } catch (Exception $e) {
      return false;
    }
  }
}
?>
