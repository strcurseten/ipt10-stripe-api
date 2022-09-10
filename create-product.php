<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIILK62xkQOtlnfy3BgGYvcrzkOpAXudke0ydA35pcWQvYWL5QYlzj8qRXoHZyEnt0abftfkTGiIW0SfB7SXex00OrdpqH2R'
  );

    $result = $stripe->products->create([
        'name' => 'Cheesecake',
]);

    $result = $stripe->products->create([
        'name' => 'Iced Coffee',
    ]);
    $result = $stripe->products->create([
        'name' => 'Iced Latte',
    ]);
    $result = $stripe->products->create([
        'name' => 'Strawberry Shortcake',
    ]);
  var_dump($result);
  