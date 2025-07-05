<?php
header("Content-Type: application/json");
echo json_encode([
  "start_time" => "2025-07-05T12:55:00+03:00",  // يبدأ بعده عداد 5 دقائق
  "winner" => file_exists("winner.txt") ? file_get_contents("winner.txt") : ""
]);
