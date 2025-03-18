<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "jonmartn86@gmail.com"; // Your email
    $subject = "New Order Request";
    $product = $_POST["product"];
    $code = $_POST["code"];
    $price = $_POST["price"];

    $message = "Hello,\n\nA customer wants to buy:\n\n";
    $message .= "Product: $product\n";
    $message .= "Code: $code\n";
    $message .= "Price: $$price\n\nThank you!";

    $headers = "From: no-reply@yourstore.com"; // Change to your store's email

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>