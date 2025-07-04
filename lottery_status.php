<?php
$host = "127.0.0.1";
$db = "draw";
$user = "root";
$pass = "Abdos270";

// الاتصال
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("فشل الاتصال: " . $conn->connect_error);
}

// جلب معلومات القرعة
$sql = "SELECT draw_time, winner_name, status FROM lottery WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo json_encode($result->fetch_assoc());
} else {
  echo json_encode(["error" => "لم يتم العثور على قرعة"]);
}
$conn->close();
?>
