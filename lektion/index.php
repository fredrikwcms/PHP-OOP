<?
include('includes/product.php');
include('includes/cart.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/php-oop/lektion/" />
    <title>Document</title>
</head>
<body>
    <?
        // var_dump($fancyShoe);
        $cart = new Cart;
        // var_dump($cart);
        $cart->addItemToCart($fancyShoe); 
        var_dump($cart);

        $cart->addItemToCart($coolSunglasses);
        print_r($cart);

        foreach($cart->items as $item) :
            echo '<h1>' . $item->name . '</h1>';
        endforeach;
    ?>
    
</body>
</html>