<?php 
if(isset($_POST['submit'])){
    $to = "viral@peppersalts.in"; // this is your Email address
    $mail = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Form submission";
    $message = "Name :". $first_name . "\n" . "Email :". $mail . "\n" . "Subject :" . $subject .  "\n" . "Message :" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
    $headers = "mail:" . $mail;
   $headers2 = "mail:" . $to;
    mail($to,$subject,$message,$headers);
   mail($mail,$subject,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>