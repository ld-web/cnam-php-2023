<?php
// Tableaux
// [0 => 4, 1 => 6, ...]
$notes = [4, 6, 2, 15, 18];

// Tableau associatif
$user = [
  "name" => "Wayne",
  "age" => 22
];

echo $user['name'];

require_once 'data/users.php';

// while, for, do...while, foreach

echo "<h2>WHILE</h2>";

$i = 0; // Instruction d'initialisation
while ($i < count($users)) { // Condition de maintien
  echo $users[$i]['name'] . ' - Age : ' . $users[$i]['age'] . '<br />';
  $i++; // Instruction de pas
}

echo "<h2>FOR</h2>";

for ($i = 0; $i < count($users); $i++) {
  echo $users[$i]['name'] . ' - Age : ' . $users[$i]['age'] . '<br />';
}

echo "<h2>DO...WHILE</h2>";

$i = 0;
do {
  echo $users[$i]['name'] . ' - Age : ' . $users[$i]['age'] . '<br />';
  $i++;
} while ($i < count($users));

echo "<h2>FOREACH</h2>";

foreach ($users as $user) {
  echo $user['name'] . ' - Age : ' . $user['age'] . '<br />';
}

echo "<h2>FOREACH KEY => USER</h2>";

foreach ($users as $key => $user) {
  echo "Index $key : " . $user['name'] . ' - Age : ' . $user['age'] . '<br />';
}
