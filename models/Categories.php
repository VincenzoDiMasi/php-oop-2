<?php

class Categories
{

    public $animals_one;

    public function __construct($_animal)
    {


        $this->animals_one = $_animal;


    }

}


$dog = new categories('Dogs');
$cat = new categories('Cats');


?>