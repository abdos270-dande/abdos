<?php
header("Content-Type: application/json");

// التاريخ والوقت بصيغة ISO 8601 (غيره حسب رغبتك)
echo json_encode([
  "start_time" => "2025-07-05T17:00:00+03:00"
]);
