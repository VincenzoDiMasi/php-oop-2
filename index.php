
<?php
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Bed.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/Toys.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>OOP-2</title>
</head>

<body>
    <div class="container m-5">
        <div class="row">
            <!-- TOYS SECTION -->
            <div class="col-12 text-center">
            </div>
            <?php foreach ($animal_toys as $a_toy): ?>
                <div class="col-6">
                    <div class='card'>
                        <img class="w-75" src=<?php echo $a_toy->img ?> alt="">
                    </div>
                    <ul>
                        <li>
                            <p>Name:
                                <?= $a_toy->name ?>
                            </p>
                        </li>
                        <li>
                            <p>Producer:
                                <?= $a_toy->product_producer ?>
                            </p>

                        </li>
                        <li>
                            <p>Material:
                                <?= $a_toy->material ?>
                            </p>

                        </li>
                        <li>
                            <p>For:
                                <?= $a_toy->categories->animals_one ?>
                            </p>

                        </li>
                        <li>
                            <p>Shape:
                                <?= $a_toy->shape ?>
                            </p>

                        </li>
                        <li>
                            <p>Color:
                                <?= $a_toy->color ?>
                            </p>
                        </li>
                        <li>
                            <p>Feature:
                                <?= $a_toy->feature ?>
                            </p>
                        </li>
                        <li>
                            <p>Price: €
                                <?= $a_toy->price ?>
                            </p>
                        </li>
                    </ul>
                </div>

                <!-- FOOD SECTION -->
            <?php endforeach; ?>
            <?php foreach ($animal_food as $a_food): ?>
                <div class="col-6">
                    <div class='card'>
                        <img class="w-25" src=<?php echo $a_food->img ?> alt="">
                    </div>

                    <ul>
                        <li>
                            <p>Name:
                                <?= $a_food->name ?>
                            </p>
                        </li>
                        <li>
                            <p>Product-producer:
                                <?= $a_food->product_producer ?>
                            </p>

                        </li>
                        <li>
                            <p>Material:
                                <?= $a_food->material ?>
                            </p>

                        </li>
                        <li>
                            <p>For:
                                <?= $a_food->categories->animals_one ?>
                            </p>

                        </li>
                        <li>
                            <p>Ingredients:
                                <?= $a_food->ingredients ?>
                            </p>

                        </li>
                        <li>
                            <p>Consistency:
                                <?= $a_food->consistency ?>
                            </p>
                        </li>
                        <li>
                            <p>Weight:
                                <?= $a_food->weight ?>
                            </p>
                        </li>
                        <li>
                            <p>Price: €
                                <?= $a_food->price ?>
                            </p>
                        </li>
                    </ul>
                </div>
                
                <!-- BED SECTION -->
            <?php endforeach; ?>
            <?php foreach ($animal_bed as $a_bed): ?>
                <div class="col-6">
                    <div class='card'>
                        <img class="w-25" src=<?php echo $a_bed->img ?> alt="">
                    </div>

                    <ul>
                        <li>
                            <p>Name:
                                <?= $a_bed->name ?>
                            </p>
                        </li>
                        <li>
                            <p>Producer:
                                <?= $a_bed->product_producer ?>
                            </p>

                        </li>
                        <li>
                            <p>Material:
                                <?= $a_bed->material ?>
                            </p>

                        </li>
                        <li>
                            <p>For:
                                <?= $a_bed->categories->animals_one ?>
                            </p>

                        </li>

                        <li>
                            <p>Size:
                                <?= $a_bed->size ?>
                            </p>
                        </li>
                        <li>
                            <p>Color:
                                <?= $a_bed->color ?>
                            </p>
                        </li>
                        <li>
                            <P>Price: €
                                <?= $a_bed->price ?>
                            </P>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>