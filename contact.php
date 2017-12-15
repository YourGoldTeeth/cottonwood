<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    $from = 'From: Online Contact Form Submission'; 
    $to = 'jameseswest@gmail.com'; 
    $subject = 'Online Contact Form Submission';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Phone: $tel\n Message:\n $message";

    if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '15') {                 
            if (mail ($to, $subject, $tel, $body, $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        } 
    } else if ($_POST['submit'] && $human != '15') {
        echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>