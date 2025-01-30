<?php
require_once 'config.php';

// Отримання даних про замовлення
$order = getOrder();

// Відправлення замовлення на електронну пошту
$to = 'medovapasika6@gmail.com ';
$subject = 'Нове замовлення';
$message = "Ім'я: " . $order['name'] . "\n" .
           "Електронна пошта: " . $order['email'] . "\n" .
           "Товар: " . $order['product'] . "\n" .
           "Кількість: " . $order['quantity'];

$headers = 'From: no-reply@marketplace.com' . "\r\n" .
           'Reply-To: no-reply@marketplace.com' . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo 'Замовлення успішно відправлено!';
} else {
    echo 'Помилка при відправленні замовлення.';
}
?>