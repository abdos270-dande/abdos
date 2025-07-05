<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['winner'])) {
  echo json_encode(["success" => false, "error" => "no name provided"]);
  exit;
}

$conn = new mysqli("sql304.infinityfree.com", "if0_39393071", "YjlT8G8HtGbMEC", "if0_39393071_draw_app");
$conn->set_charset("utf8");

$name = $conn->real_escape_string($data['winner']);
$conn->query("INSERT INTO winners (name) VALUES ('$name')");

echo json_encode(["success" => true]);
?>
