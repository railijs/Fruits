<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>





<h1>Fruits</h1>


<ul>
<?php foreach($fruits as $fruit) { ?>
  <li>
 <p> <a href="/show?id=<?= $fruit["id"] ?> "><?= htmlspecialchars($fruit["name"])?> has <?= htmlspecialchars($fruit["calories"])?> calories<a/> </p>
    <form class="delete-form" method="POST" action="/delete"><button class="delete-button" name="id" value="<?= $fruit["id"] ?>" >Delete <?= $fruit["name"] ?></button></form>
  </li> 
<?php } ?>
</ul>
</a>

<?php require "views/components/footer.php" ?>