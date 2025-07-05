<?php
header("Content-Type: application/json");

$conn = new mysqli("sql304.infinityfree.com", "if0_39393071", "YjlT8G8HtGbMEC", "if0_39393071_draw_app");
$conn->set_charset("utf8");

$result = $conn->query("SELECT start_time FROM draw_config WHERE id = 1");
$row = $result->fetch_assoc();

$isoTime = date('c', strtotime($row["start_time"])); // تنسيق متوافق تمامًا مع JavaScript
echo json_encode(["start_time" => $isoTime]);
?>
