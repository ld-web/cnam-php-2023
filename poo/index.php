<?php
// Classe, propriété, instance, héritage, polymorphisme, surcharge
// Classe abstraite, interface, méthode, statique, constructeur, portées,
// encapsulation

require_once 'Product.php';

$product = new Product();
try {
  $product
    ->setPrice(-45)
    ->setName("Test");
  echo $product->getTtcPrice(1.2);
} catch (InvalidArgumentException $ex) {
  echo "Error : " . $ex->getMessage();
}
