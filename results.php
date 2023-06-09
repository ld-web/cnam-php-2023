<?php
require_once 'layout/header.php';
require_once 'data/users.php';

['s' => $search] = $_GET;
$results = array_filter($users, fn ($u) => str_contains($u['name'], $search));

// foreach ($users as $u) {
//   if (str_contains($u['name'], $search)) {
//     $results[] = $u;
//   }
// }
?>

<h1>Résultats</h1>

<p><?php echo count($results); ?> résultat(s)</p>

<?php foreach ($results as $res) { ?>
  <div>
    <?php echo $res['name']; ?>
  </div>
<?php }

require_once 'layout/footer.php';
