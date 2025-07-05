<?php
// هذا الملف يتم جلب وقت بداية القرعة منه
header("Content-Type: application/json");
echo json_encode([
  "start_time" => "2025-07-05T12:35:00+03:00"
]);
