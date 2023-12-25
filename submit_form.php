<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $toppings = isset($_POST['topping']) ? implode(', ', $_POST['topping']) : '';
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $orderNumber = $_POST['orderNumber'];

    // Prepare email content
    $subject = 'Pancake Delivery Order Confirmation';
    $message = "Thank you for your order!\n\n";
    $message .= "Order Number: $orderNumber\n";
    $message .= "Toppings: $toppings\n";
    $message .= "Quantity: $quantity\n";
    $message .= "Name: $name\n";
    $message .= "Address: $address\n";
    $message .= "Contact Number: $contactNumber\n";
    $message .= "Email: $email\n";

    // Send confirmation email
    mail($email, $subject, $message);

    // Redirect to a thank you page or display a confirmation message
    header("Location: thank_you.html");
    exit();
}
?>
