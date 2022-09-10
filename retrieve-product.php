<?php
require "vendor/autoload.php";

 $stripe = new \Stripe\StripeClient(
    'sk_test_51LgIILK62xkQOtlnfy3BgGYvcrzkOpAXudke0ydA35pcWQvYWL5QYlzj8qRXoHZyEnt0abftfkTGiIW0SfB7SXex00OrdpqH2R'
  );

  $result = $stripe->products->retrieve(
    'prod_MP6n9hTxuaIqUj',
    []
  );

  $result = $stripe->products->retrieve(
    'prod_MP7B6oTj1o3TR4',
    []
  );

  $result = $stripe->products->retrieve(
    'prod_MP7BBLCGuqPo7v',
    []
  );

  $result = $stripe->products->retrieve(
    'prod_MP7BUuR4wHxmLU',
    []
  );

  $result = $stripe->products->retrieve(
    'prod_MP7Bzs0XPFC9TE',
    []
  );

  var_dump($result);