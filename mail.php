<?php
    $to = 'info@yinkrealservices.co.uk';
    $fname = $_POST["fname"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $message= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: Contact Form " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>Name: '.$fname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Message: '.$message.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo '<font color="green">Your message has been sent.<br> You will be contacted shortly.</font>';
    }else{
        echo '<font color="red">Message failed</font>';
    }

?>
