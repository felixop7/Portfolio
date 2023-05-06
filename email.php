<?php
if(isset($_POST['submit'])) {
    $to = "roshansahani226@gmail.com"; // Replace with your own email address
    $subject = "New message from website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $headers = "From: $name <$email> \r\n";
    $headers .= "Reply-To: $name <$email> \r\n";

    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Message: $message\n";

    $send_mail = mail($to, $subject, $email_body, $headers);

    if($send_mail) {
        echo "Thank you for contacting us. We will be in touch with you very soon.";
    }
    else {
        echo "Sorry, an error occurred while sending your message. Please try again later.";
    }
}
?>
