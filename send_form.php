<!-- This PHP file treats the data sent through from feedback form -->

<?php
if(isset($_POST['email'])) {
    // Set uo email adress to send messages to
    $email_to = "hamara.jan18@gmail.com";
    // Set up a subject for email
    $email_subject = "New Message from [ Which country of the world is the best for becoming a millionaire? ]";

    // In case script fails, send an error message (this time on server side)
    function died($error) {
        // your error code can go here
        echo "Sorry but there has been a problem with the feedback form";
        echo "Errors appear below <br /><br />";
        echo $error."<br /><br />";
        die();
    }

    // Server-side validation that the expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('Sorry but there has been a problem with the feedback form');
    }

    // Setting variables for form values
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $message = $_POST['message'];

    $email_from = $_POST['email'];
    $error_message = "";

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    // Message to show in the mail body, before user's message
    $email_message = "Feedback received from the form at [ Which country of the world is the best for becoming a millionaire? ]";

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    // Setting up email message header in body from user information, in order to show it in every arriving email
    $email_message .= "Nom: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($mail)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

    // Here I create email headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // And finally sending mail
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>

    <?php
    }
    ?>