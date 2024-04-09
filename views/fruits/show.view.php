<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($fruit["name"]) ?></h1>

<p> This <?= htmlspecialchars($fruit["name"])?> has <?= htmlspecialchars($fruit["calories"])?> calories :0 </p>

<a class="edit-button" href="/edit?id=<?= $fruit["id"] ?>">Edit</a>

<?php require "views/components/footer.php" ?>