$to_mail = 'developer.hasan.bd@gmail.com';
$headers = '';
$headers .= "From: Title here <noreply@domain> \r\n";
$subject = "Subject here";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


mail($to_mail, $subject, $msg, $headers, 'domain');
