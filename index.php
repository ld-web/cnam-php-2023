<?php require_once 'layout/header.php'; ?>

<h1><?php echo "Hello CNAM"; ?></h1>
<?php
$notes = [4, 6, 2, 15, 18];

var_dump($notes);

$age = 21;

echo "Vous avez $age ans<br />";
echo 'Vous avez ' . $age . ' ans';

require_once 'layout/footer.php';
