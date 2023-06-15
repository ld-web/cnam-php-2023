<?php
// Classe, propriété, instance, héritage, polymorphisme, surcharge
// Classe abstraite, interface, méthode, statique, constructeur, portées,
// encapsulation

require_once 'Product.php';
require_once 'ProductRect.php';
require_once 'ProductCirc.php';
require_once 'Email.php';
require_once 'SpamChecker.php';
require_once 'Utils.php';

/**
 * Display a list of products
 *
 * @param Product[] $products
 * @return void
 */
function displayProductsInfos(array $products): void
{
  foreach ($products as $product) {
    $product->displayInfos();
  }
}

try {
  $painting = new ProductRect("Tableau de maître", 8520, 5, 3);
  $frame = new ProductCirc("Cadre portrait", 40, 40);
  $plate = new ProductCirc("Assiette design", 40, 40);
  $newPainting = new ProductRect("Autre tableau de maître", 8520, 5, 3);

  // Requête BDD
  $products = [
    $painting, $frame, $plate, $newPainting
  ];
  displayProductsInfos($products);

  // $product = new Product("Test", -45);
  // echo $product->getTtcPrice(1.2);
} catch (InvalidArgumentException $ex) {
  echo "Error : " . $ex->getMessage();
}

$email = new Email('bob@test.fr');

var_dump(SpamChecker::SPAM_DOMAINS);

$spamChecker = new SpamChecker();

var_dump($email->getEmail());

if ($spamChecker->isSpam($email)) {
  Utils::redirect('error.php');
}
