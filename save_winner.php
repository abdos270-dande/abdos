<?php
header("Content-Type: application/json");

// تأكد أن الطلب هو POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $data = json_decode(file_get_contents("php://input"), true);

  if (isset($data["winner"]) && !empty($data["winner"])) {
    // حفظ الفائز في ملف winner.txt
    file_put_contents("winner.txt", $data["winner"]);
    echo json_encode(["status" => "saved", "winner" => $data["winner"]]);
  } else {
    echo json_encode(["status" => "error", "message" => "اسم الفائز غير موجود"]);
  }

} else {
  echo json_encode(["status" => "invalid_method", "message" => "يرجى استخدام POST"]);
}
