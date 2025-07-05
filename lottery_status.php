<?php
$drawTime = strtotime("2025-07-06 20:00:00"); // ← عدل وقت بداية القرعة هنا
$now = time();

if (file_exists("winner.txt")) {
    $winner = file_get_contents("winner.txt");
    echo json_encode(["status" => "done", "winner" => $winner]);
} else {
    echo json_encode([
        "status" => "pending",
        "draw_time" => date("Y-m-d H:i:s", $drawTime)
    ]);
}
