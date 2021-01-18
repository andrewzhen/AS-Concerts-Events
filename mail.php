<?PHP
$sender = $_POST['email'];
$message = $_POST['message'];
$subject = "Message from " + $sender;
$recipient = 'andrewjzhen@gmail.com';

if (wp_mail($recipient, $subject, $message))
{
  echo "Message accepted";
}
else
{
  echo "Error: Message not accepted";
}

wp_mail($recipient, $subject, $message);
?>


<!-- $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Message: $message";
$recipient = "andrewjzhen@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
echo $name + " " + $email + " " + $message;
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>"; -->


<!-- $errors = '';
$myemail = 'andrewjzhen@gmail.com';//<-----Put Your email address here.

if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$visitor_email_address = $_POST['email'];
$message = $_POST['message'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
  $errors .= "\n Error: Invalid email address";
}

if( empty($errors)) 
{
  $to = $myemail;
  $email_subject = "Contact form submission: $name";
  $email_body = "You have received a new message. ".
  " Here are the details:\n Name: $name \n ".
  "Email: $email_address\n Message \n $message";
  $headers = "From: $myemail\n";
  $headers .= "Reply-To: $visitor_email_address";

  mail($to,$email_subject,$email_body,$headers);

  //redirect to the 'thank you' page
  header('Location: index.html');
} -->
