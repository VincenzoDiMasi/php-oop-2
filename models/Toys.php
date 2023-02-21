<?php
require_once __DIR__ . '/Product.php';

class AnimalToys extends Product
{

    public $shape;

    public $color;

    public $feature;




    public function __construct($_img, $_material, $_product_producer, $_name, $_price, $_categories, $_shape, $_color, $_feature)
    {
        parent::__construct($_img, $_material, $_product_producer, $_name, $_categories, $_price);

        $this->shape = $_shape;
        $this->color = $_color;
        $this->feature = $_feature;

    }

}

// TOYS
$dog_toy = new AnimalToys('https://doglab.com/wp-content/uploads/Some-of-the-different-heavy-duty-chew-toys-we-tested-and-reviewed-to-find-the-best.jpg', 'Vario', 'WWF', 'Bonez', 18, $dog, 'toy bones', 'multicolor', 'Funny');
$cat_toy = new AnimalToys('https://rawznaturalpetfood.com/wp-content/uploads/Screen-Shot-2022-02-28-at-2.29.34-PM.png', 'plastic', 'WWF', 'CatBall', 16, $cat, 'ball', 'multicolor', 'funny');

$animal_toys = [$dog_toy, $cat_toy];
?>