<?php
header("Content-Type: application/json; charset=UTF-8");
// $obj = json_decode($_GET["x"], false);
include("../../assts/fctn/serv-conf.php");
$id = 130;
$stmt = $pdo->prepare("SELECT * FROM prpdt WHERE prpdt_id = :id LIMIT 1");
$stmt->bindParam(":id", $id);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($result);
