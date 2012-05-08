<?php
require_once("../class.phpmailer.php");
$mail = new PHPMailer();
 
// setting
$mail->IsSMTP();  // Fungsi Pengiriman dengan SMTP
$mail->Host     = "mail.0fees.net"; // server mail anda
$mail->SMTPAuth = true;     
$mail->Username = "fees0_6225232";  // username email anda
$mail->Password = "erafael"; //
 
// pengirim
$mail->From     = "dhyar82@gmail.com"; // Masukan dari form.php variabel email
$mail->FromName = "Dhyar Irdiansyah"; // Masukan dari form.php variabel nama
 
// penerima
$mail->AddAddress("erafael00@gmail.com","asdasd");
//$mail-&gt;AddCC("$_POST[email]",",$_POST[nama]"); // Jika email akan dikirimkan juga ke pengirim --&gt; masukan dari form : CC
$mail->AddBCC("erafael00@gmail.com"); // alamat email BCC
 
// kirim balik
$mail->AddReplyTo("erafael00@gmail.com","asdas"); // Kirim balik jika ingin reply
 
$mail->WordWrap = 50;                              // set word wrap
//$mail->AddAttachment(getcwd() . "/$_POST[file1]");      // attachment --&gt; hapus double slash untuk mengaktifkan
$mail->IsHTML(true);                               // send as HTML
 
//Subject dan isi Pesan
$mail->Subject  =  "sada";
$mail->Body     =  "asdas";
$mail->AltBody  =  "asdas";
 
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>
