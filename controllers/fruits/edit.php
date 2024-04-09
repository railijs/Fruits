<?php
require "Validator.php";
require "Database.php";

$config = require ("config.php");
$db = new Database($config);

$query = "SELECT * FROM fruits";
$params = [];


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(!Validator::string($_POST["name"], min: 2, max: 50)) {
        $errors["name"] = "name cannot be less than 2 letters or longer than 50 letters";
    }
    
    if(!Validator::number($_POST["calories"], min: 1, max: INF)) {
        $errors["calories"] = "calories cannot be 0 or letters";
    }

    if(empty($errors)) {
    
        $query = "UPDATE fruits
                  SET name = :name, calories = :calories 
                  WHERE id = :id";
        $params = [
            ":name" => $_POST["name"], 
            ":calories" => $_POST["calories"],
            ":id" => $_POST["id"]
        ];

        $db -> execute($query, $params);
        
        header("Location: /show?id=". $_POST["id"]);
        die();
    }
}

$query = "SELECT * FROM fruits WHERE id = :id";
$params = [":id" => $_GET["id"]];

$fruit = $db -> execute($query, $params) 
             -> fetch();



$title = "Edit a Fruit";
require "views/fruits/edit.view.php";