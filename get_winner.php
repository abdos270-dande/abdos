<?php
header('Content-Type: application/json');

$conn = new mysqli("sql304.infinityfree.com", "if0_39393071", "YjlT8G8HtGbMEC", "if0_39393071_draw_app");
$conn->set_charset("utf8");

$result = $conn->query("SELECT name FROM winner WHERE id = 1");
$row = $result->fetch_assoc();

echo json_encode(["name" => $row ? $row["name"] : null]);
?>
