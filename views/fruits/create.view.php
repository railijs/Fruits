<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>


<h1>Create a Fruit</h1>

<form method="POST">
    <label style="color: white;">Fruit name:
        <input name="name" value="<?= $_POST["name"] ?? "" ?>"/>
        <?php if (isset($errors["name"])) { ?>
            <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
    </label>
    <br/>
    <label style="color: white;">Calories:
        <input name="calories" value="<?= $_POST["calories"] ?? "" ?>"/>
        <?php if (isset($errors["calories"])) { ?>
            <p class="invalid-data"><?= $errors["calories"] ?></p>
            <?php } ?>
    </label>
    <button>Save</button>
</form>





<?php require "views/components/footer.php" ?>