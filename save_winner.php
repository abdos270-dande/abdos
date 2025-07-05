<?php
$data = json_decode(file_get_contents("php://input"), true);
$name = $data["winner"];

$conn = new mysqli("sql304.infinityfree.com", "if0_39393071", "YjlT8G8HtGbMEC", "if0_39393071_draw_app");
$conn->query("UPDATE winner SET name = '$name' WHERE id = 1");

echo json_encode(["status" => "saved"]);
?>
