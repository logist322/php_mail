<?php

/* https://api.telegram.org/bot1049480610:AAHr3xA97op5feaWpN2jJh5ES3dVEP9vjPg/getUpdates*/

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "1049480610:AAHr3xA97op5feaWpN2jJh5ES3dVEP9vjPg";
$chat_id = "-1001310429202";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$ch = curl_init("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text=$txt");
$sendToTelegram = curl_exec($ch);

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>