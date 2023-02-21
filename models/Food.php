<?php
require_once __DIR__ . '/Product.php';

class AnimalFood extends Product
{
    public $ingredients;
    public $consistency;
    public $weight;



    public function __construct($_img, $_material, $_product_producer, $_name, $_categories, $_price, $_ingredients, $_consistency, $_weight)
    {
        parent::__construct($_img, $_material, $_product_producer, $_name, $_categories, $_price);


        $this->ingredients = $_ingredients;
        $this->consistency = $_consistency;
        $this->weight = $_weight;

    }
}



$food_dog = new AnimalFood('https://www.naturepetshop.it/wp-content/uploads/cibo-secco-per-cani-300x215.jpg', 'organic', 'Puppies', 'food Dog', $dog, 4, 'Cereals', 'Dry', '500gr');
$food_cat = new AnimalFood('https://www.naturepetshop.it/wp-content/uploads/cibo-secco-per-cani-300x215.jpg', 'organic', 'Pussies', 'food Cat', $cat, 4, 'Meat', 'Humid', '500gr');

$animal_food = [$food_dog, $food_cat];
?>