<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "Danvdmijl@outlook.com";
    $email_subject = "Bericht van JDMerch";
 
    function died($error) {
        echo "Het spijt ons maar er is een fout opgetreden met het forum! ";
        echo "Hieronder staan de errors.<br /><br />";
        echo $error."<br /><br />";
        echo "Probeer het aub opnieuw.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('Er is een probleem opgetreden met het form dat u stuurt.');       
    }
 
     
 
    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Het Email dat u invuld is ongeldig.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'De naam die u invoerd is niet geldig.<br />';
  }
 
   
  if(strlen($message) < 1) {
    $error_message .= 'Het bericht dat u invoerd is niet geldig.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details staan hier beneden.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Naam:: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefoon Nummer: ".clean_string($phone)."\n";
    $email_message .= "Onderwerp: ".clean_string($subject)."\n";
    $email_message .= "Bericht: ".clean_string($message)."\n";
 
$headers = 'Van: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
 
Bedankt voor het contacteren, we komen zo snel mogelijk bij u terug.
 
<?php
 
}
?>