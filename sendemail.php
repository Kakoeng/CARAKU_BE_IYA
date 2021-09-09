<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit']))
{
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $umur = $_POST['umur'];
  $gender = $_POST['gender'];
  $whatsapp = $_POST['whatsapp'];
  $sskd = $_FILES['sskd']['tmp_name'];


  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'carakubeiya@gmail.com'; 
    $mail->Password = 'cbikintil123'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->addAttachment($sskd,'screenshot/image.jpg');

    $mail->setFrom('carakubeiya@gmail.com'); 
    $mail->addAddress('carakubeiya@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'FORMULIR';
    $mail->Body = "<h3>Nama : $nama <br>Alamat: $alamat <br>Umur : $umur <br>Gender : $gender <br>Whatsapp : $whatsapp <br>Screenshot : $sskd </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Formulir Terkirim!<br>Tunggu Info Selanjutnya...</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>

