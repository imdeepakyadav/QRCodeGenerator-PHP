<?php
require_once('phpqrcode/qrlib.php');

if (isset($_POST['data'])) {
  $data = $_POST['data'];
  $size = 10;
  $level = 'L';
  $margin = 4;
  $filename = 'qrcode.png';
  $errorCorrectionLevel = 'L';
  $matrixPointSize = 8;
  
  // Generate QR code image
  QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
  
  // Resize image to 512 x 512 pixels
  $resizedImage = imagecreatetruecolor(512, 512);
  $originalImage = imagecreatefrompng($filename);
  imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, 512, 512, imagesx($originalImage), imagesy($originalImage));
  imagedestroy($originalImage);
  
  // Save resized image to file
  imagepng($resizedImage, $filename);
  
  // Output QR code image to browser
  header("Content-Type: image/png");
  readfile($filename);
  exit;
}
?>
