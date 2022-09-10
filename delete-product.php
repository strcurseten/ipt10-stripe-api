<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIILK62xkQOtlnfy3BgGYvcrzkOpAXudke0ydA35pcWQvYWL5QYlzj8qRXoHZyEnt0abftfkTGiIW0SfB7SXex00OrdpqH2R'
  );

  $result = $stripe->products->delete(
    'prod_MP7BUuR4wHxmLU',
    []
  );

  var_dump($result);
