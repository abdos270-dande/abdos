<?php
header('Content-Type: application/json');
$conn = new mysqli("sql304.infinityfree.com", "if0_39393071", "YjlT8G8HtGbMEC", "if0_39393071_draw_app");
$result = $conn->query("SELECT start_time FROM draw_config WHERE id = 1");
$row = $result->fetch_assoc();
echo json_encode(["start_time" => date(DATE_ISO8601, strtotime($row["start_time"]))]);
?>
