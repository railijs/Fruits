<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<a class="back-button" href="/show?id=<?= $fruit["id"] ?> ">back<a/>
<h1>Edit <?= htmlspecialchars($fruit["name"]) ?></h1>

<form method="POST">
    <input name="id" value=" <?= $fruit["id"] ?>" type="hidden" />
    <label style="color: white;">Fruit name:
        <input name="name" value="<?= $_POST["name"] ?? $fruit["name"] ?>"/>
        <?php if (isset($errors["name"])) { ?>
            <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
    </label>

    <br/>

    <label style="color: white;">Calories:
        <input type="number" name="calories" value="<?= $_POST["calories"] ?? $fruit["calories"] ?>"/>
        <?php if (isset($errors["calories"])) { ?>
            <p class="invalid-data"><?= $errors["calories"] ?></p>
            <?php } ?>
    </label>
    <button>Save</button>
</form>


<?php require "views/components/footer.php" ?>