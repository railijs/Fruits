<?php
require "Database.php";


$config = require ("config.php");

$query = "SELECT fruits.* FROM fruits";
$params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {
$id = $_GET["id"];
$query .= " WHERE id = :id";
$params = [":id" => $id];
}

$db = new Database($config);

$fruits = $db -> execute($query, $params) 
             -> fetchAll();

$title = "Fruits";             

require "views/fruits/index.view.php";