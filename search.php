<?php require_once 'layout/header.php'; ?>

<form action="results.php" method="get">
  <label for="s">Recherche :</label>
  <input type="text" name="s" id="s" />
  <button type="submit">
    Rechercher
  </button>
</form>

<?php require_once 'layout/footer.php'; ?>