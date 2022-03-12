

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail -> CharSet = 'UTF-8';
$mail -> setLanguage('ru', 'PHPMailer/language/');
$mail -> isHTML(true);

$Profile = $_POST['Profile'];

$mail -> setFrom('zippo71323245@gmail.com','PWS');

$mail -> addAddress('pai1963@yandex.ru');

$mail -> Subject = 'Расчёт из Конструктора заказа.';


$body = '<h1>Данные из конструктора:</h1><br>';

$body .= $_POST['Profile'];

$mail -> Body = $body;


if (!$mail -> send()) {
	$message = 'Ошибка';
} else {
	$message = 'Данные отправлены';
}

$response = ['message' => $message];

header('Content-type: application/json');

echo json_encode($response);
?>
