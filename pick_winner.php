<?php
$drawTime = strtotime("2025-07-06 20:00:00"); // ← نفس وقت القرعة
$now = time();

if ($now < $drawTime) {
    echo json_encode(["status" => "too_early"]);
    exit;
}

if (file_exists("winner.txt")) {
    $winner = file_get_contents("winner.txt");
    echo json_encode(["status" => "success", "winner" => $winner]);
    exit;
}

$names = file("names.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (empty($names)) {
    echo json_encode(["status" => "error", "msg" => "لا يوجد مشاركين"]);
    exit;
}

$winner = $names[array_rand($names)];
file_put_contents("winner.txt", $winner);
echo json_encode(["status" => "success", "winner" => $winner]);
