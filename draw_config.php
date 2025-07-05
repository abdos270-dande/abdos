<?php
$conn = new mysqli("sql304.infinityfree.com", "if0_39393071", "YjlT8G8HtGbMEC", "if0_39393071_draw_app");
$conn->set_charset("utf8");

$result = $conn->query("SELECT start_time FROM draw_config WHERE id = 1");
$row = $result->fetch_assoc();

header("Content-Type: application/json");
echo json_encode(["start_time" => date(DATE_ISO8601, strtotime($row["start_time"]))]);
?>
