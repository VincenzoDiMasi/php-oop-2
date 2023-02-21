<?php
require_once __DIR__ . '/Product.php';

class AnimalBed extends Product
{

    public $size;

    public $color;


    public function __construct($_img, $_material, $_product_producer, $_name, $_price, $_categories, $_size, $_color)
    {
        parent::__construct($_img, $_material, $_product_producer, $_name, $_categories, $_price);

        $this->size = $_size;
        $this->color = $_color;

    }

}


$dog_bed = new AnimalBed('https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw7993485b/images_dmail/large/1935l.jpg', 'Industrial', 'Bed Dog', 'For dog', 27, $dog, 'medium', 'black');
$cat_bed = new AnimalBed('https://www.giessepets.it/wp-content/uploads/cuccia-04.jpg', 'Industrial', 'Bed Cat', 'For cat', 15, $cat, 'medium', 'black');


$animal_bed = [$dog_bed, $cat_bed];
?>