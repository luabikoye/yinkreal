<?php

    $to = 'info@yinkrealservices.co.uk';

    $service = $_POST["service"];

    $name = $_POST["name"];

    $companyname = $_POST["companyname"];

    $email= $_POST["email"];

    $phone= $_POST["phone"];

    $info= $_POST["info"];

    





    $headers = 'MIME-Version: 1.0' . "\r\n";

    $headers .= "From: Request Service Form " . $email . "\r\n"; // Sender's E-mail

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



    $message ='<table style="width:100%">

        <tr>

            <td>What can we do for you: '.$service.'</td>

        </tr>

        <td>Name: '.$name.'</td>

        <tr><td>Company Name: '.$companyname.'</td></tr>

        <tr><td>Email: '.$email.'</td></tr>

        <tr><td>phone: '.$phone.'</td></tr>

        <tr><td>Additional Information: '.$info.'</td></tr>

        

    </table>';



    if (@mail($to, $email, $message, $headers))

    {

        echo '<font color="green">Your Request has been sent.</font>';

	

    }else{

        echo '<font color="red">Request failed</font>';

    }



?>

