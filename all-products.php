<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIILK62xkQOtlnfy3BgGYvcrzkOpAXudke0ydA35pcWQvYWL5QYlzj8qRXoHZyEnt0abftfkTGiIW0SfB7SXex00OrdpqH2R'
  );

  $result = $stripe->products->all(['limit' => 5]);

  var_dump($result);