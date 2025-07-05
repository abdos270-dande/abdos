<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

// تحقق من وجود الاسم
if (!isset($data['winner']) || empty(trim($data['winner']))) {
  echo json_encode(["success" => false, "error" => "no name provided"]);
  exit;
}

$conn = new mysqli("sql304.infinityfree.com", "if0_39393071", "YjlT8G8HtGbMEC", "if0_39393071_draw_app");
$conn->set_charset("utf8");

// تحقق من الاتصال
if ($conn->connect_error) {
  echo json_encode(["success" => false, "error" => "Database connection failed"]);
  exit;
}

// إدخال آمن باستخدام prepared statement لتجنب SQL Injection
$name = trim($data['winner']);
$stmt = $conn->prepare("INSERT INTO winners (name) VALUES (?)");
$stmt->bind_param("s", $name);

if ($stmt->execute()) {
  echo json_encode(["success" => true]);
} else {
  echo json_encode(["success" => false, "error" => "Insertion failed"]);
}

$stmt->close();
$conn->close();
?>
