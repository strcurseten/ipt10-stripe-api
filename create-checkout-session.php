<?php
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51LgIILK62xkQOtlnfy3BgGYvcrzkOpAXudke0ydA35pcWQvYWL5QYlzj8qRXoHZyEnt0abftfkTGiIW0SfB7SXex00OrdpqH2R');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242/public';
$NEW_DOMAIN = 'http://localhost:80/stripe';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1LgJNrK62xkQOtlnsmCYmq6z',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $NEW_DOMAIN . '/success.html',
  'cancel_url' => $NEW_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);