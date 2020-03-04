<?
class Product {
    public $name;
    public $price;
    public $rsp;
    public $taxType;

    public function __construct($name, $price, $taxType) {
        $this->name = $name;
        $this->price = $price;
        $this->rsp = $addedTax;
        $this->taxType = $taxType;
    }

    public function calcTax() {
        // calculate tax based on the input
        $tax = $this->price * $this->taxType;
        // price + tax = the price after tax
        $addedTax = $this->price + $tax;
        // round our value and save it to the new instance of the class
        $this->rsp = round($addedTax);
        // return our updated object/instance
        return $this;  
    }
}

// Create a new product 
$fancyShoe = new Product('Nike Blazer Mid', 1000, 0.25);
// Update the price with the calcTax() method
$fancyShoe = $fancyShoe->calcTax();
// Show us the magic :)
// var_dump($fancyShoe);

// Add a new product
$coolSunglasses = new Product('Rayban Wayfarers', 2750, 0.25);

$coolSunglasses = $coolSunglasses->calcTax();
