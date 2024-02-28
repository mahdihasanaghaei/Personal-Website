<?php
  // دریافت مقادیر فرم
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // ارسال ایمیل
  mail('mahdi.ha99@gmail.com', $message, $fname, 'From: ' . $email);

  // پیام موفقیت
  echo "ارسال ایمیل با موفقیت انجام شد.";
?>
