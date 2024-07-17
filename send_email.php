<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'layouts/config.php';

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';
$footerEmail = isset($_POST['footer_email']) ? $_POST['footer_email'] : '';
if ($footerEmail) {
    $email = $footerEmail;
    $name = 'Footer Formu Kullanıcısı';
    $phone = 'Belirtilmemiş';
    $message = 'Footer üzerinden gönderilen e-posta.';
}
$vcfContent = "BEGIN:VCARD\r\n";
$vcfContent .= "VERSION:3.0\r\n";
$vcfContent .= "FN:" . $name . "\r\n";
$vcfContent .= "EMAIL:" . $email . "\r\n";
$vcfContent .= "TEL:" . $phone . "\r\n";
$vcfContent .= "NOTE:" . $message . "\r\n";
$vcfContent .= "END:VCARD\r\n";
$vcfFileName = $name . '.vcf';
$vcfFilePath = tempnam(sys_get_temp_dir(), 'vcf');
file_put_contents($vcfFilePath, $vcfContent);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bauart.destek@hotmail.com';
    $mail->Password = 'Bauart.2024!';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('bauart.destek@hotmail.com', 'Bauart Destek');
    $mail->addAddress('bauart.destek@hotmail.com');
    $mail->addAttachment($vcfFilePath, $vcfFileName);
    $mail->isHTML(true);
    $mail->Subject = 'Yeni Başvuru Talebi';
    $mail->Body    = '<p>Yeni bir başvuru talebi aldınız. İletişim bilgileri yukardaki VCF ek dosyasında bulunmaktadır. Gönderilen mesajı aşağıda görebilirsiniz. </br>İyi günler dileriz.</p></br><div style="display: flex; flex-direction: column; align-items:start; justify-content: start; gap: 5px"><h4 style="margin-bottom: 0">Mesaj:</h4><p style="margin-top: 0">' . $message . '</p></div>';
    $mail->AltBody = "Bir yeni başvuru talebi aldınız. Kişi bilgileri ekteki VCF dosyasında bulunmaktadır.";
    $mail->send();
    header("Location: " . BASE_URL . "contact.php?status=success");
    exit;
} catch (Exception $e) {
    echo "Mesaj gönderilemedi. Hata: {$mail->ErrorInfo}";
} finally {
    unlink($vcfFilePath);
}
