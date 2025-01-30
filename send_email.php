<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "gfgf08708@gmail.com";
    $subject = "Запрос на помощь с сайта BeamNG";
    $body = "Имя: $name
Email: $email
Сообщение:
$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке.";
    }
}
?>
