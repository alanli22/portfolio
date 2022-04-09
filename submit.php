<?php
	if(isset($_POST['submit'])){
        
        $fname=$_POST['fname'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        
        
        $from = "alanlihus42@gmail.com";
        $reserve = "Portfolio - Message";
		$to='huseyin_alanli@yahoo.com'; //Receiver Email ID, Replace with your email ID
		$subject="New Portfolio Message";
        $message=
        "
    <html>
    <head>
    <title>New Message</title>
    </head>
    <body>
    <table>
    <tr background-color: #271d62;>
    <th style='background-color:#271d62; color:#ffffff; padding-top: 12px; padding-bottom: 12px; text-align: left; border: 1px solid #271d62; padding: 8px; '>Name</th>
    <th style='background-color:#271d62; color:#ffffff; padding-top: 12px; padding-bottom: 12px; text-align: left; border: 1px solid #271d62; padding: 8px; '>Email</th>
    <th style='background-color:#271d62; color:#ffffff; padding-top: 12px; padding-bottom: 12px; text-align: left; border: 1px solid #271d62; padding: 8px; '>Message</th>
    </tr>
    <tr background-color: #f2f2f2;>
    <td style='border: 1px solid #271d62; padding: 8px;'>".$fname."</td>
    <td style='border: 1px solid #271d62; padding: 8px;'>".$email."</td>
    <td style='border: 1px solid #271d62; padding: 8px;'>".$message."</td>
    </tr>
    </table>
    </body>
    </html>
    ";
        
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From:  ' . $reserve . ' <' . $from .'>' . " \r\n" .
            'Reply-To: '. $from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        

        if(!empty($_POST['website'])) die();
        
		if(mail($to, $subject, $message, $headers)){
			{ 


      echo "<script>alert('I have got your message. Thank you! ');</script>";
      echo "<script>document.location.href='index.html'</script>";
      }
      
		}
		else{
      echo "<script>alert('Error, Please try again later.');</script>";
		}
	}

?>