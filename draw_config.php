<?php
// هذا الملف يتم جلب وقت بداية القرعة منه
header("Content-Type: application/json");
echo json_encode([
  "start_time" => "2025-07-05T17:00:00+03:00"
]);
