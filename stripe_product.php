<?php
require "vendor/autoload.php";

 $stripe = new \Stripe\StripeClient(
    'sk_test_51LgIILK62xkQOtlnfy3BgGYvcrzkOpAXudke0ydA35pcWQvYWL5QYlzj8qRXoHZyEnt0abftfkTGiIW0SfB7SXex00OrdpqH2R'
  );

  $product = $stripe->products->retrieve(
    'prod_MP7diiQo8mBxef',
    []
  );

  $price = $stripe->prices->retrieve('price_1LgJNrK62xkQOtlnsmCYmq6z',[]);

?>

<html>
  <head>
    <title>Six Of Crows Collector Edition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand">AKLAT</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container mx-auto">
        <div class="row m-5 content-justify-center">
            <div class="col">
                <img src="<?php echo array_pop($product->images); ?>" alt="<?php echo $product->name; ?>" style="width: 250px" />
            </div>

            <div class="col">
                <h3><?php echo $product->name; ?></h3>
                <p class="m-4"><?php echo $product->description; ?></p>
                <h4><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h4>
                <form action="/stripe/create-checkout-session.php" method="POST">
                    <button class="btn btn-outline-dark" type="submit" id="checkout-button">Checkout</button>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>