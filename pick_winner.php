<?php
$host = "127.0.0.1";
$db = "draw";
$user = "root";
$pass = "Abdos270";

$participants = ["أحمد", "سارة", "محمد", "ليلى", "عمرو", "نور", "مريم", "خالد"];

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("فشل الاتصال: " . $conn->connect_error);
}

// جلب القرعة
$sql = "SELECT draw_time, status FROM lottery WHERE id = 1";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

$now = time();
$draw_time = strtotime($data["draw_time"]);

if ($data["status"] === "pending" && $now >= $draw_time) {
  $winner = $participants[rand(0, count($participants) - 1)];
  $update = "UPDATE lottery SET winner_name = '$winner', status = 'done' WHERE id = 1";
  if ($conn->query($update)) {
    echo json_encode(["status" => "success", "winner" => $winner]);
  } else {
    echo json_encode(["status" => "error", "msg" => $conn->error]);
  }
} else {
  echo json_encode(["status" => "waiting"]);
}
$conn->close();
?>
