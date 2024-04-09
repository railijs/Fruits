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
        $errors["calories"] = "calories cannot be negative or 0 or letters";
    }

    if(empty($errors)) {
    
        $query = "INSERT INTO fruits (name, calories)
                VALUES (:name, :calories);";
        $params = [
            ":name" => $_POST["name"], 
            ":calories" => $_POST["calories"]
        ];

        $db -> execute($query, $params);
        
        header("Location: /");
        die();
    }
}




$title = "Create a fruit";
require "views/fruits/create.view.php";