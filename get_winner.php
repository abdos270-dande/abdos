<?php
header("Content-Type: application/json");

if (file_exists("winner.txt")) {
  $winner = trim(file_get_contents("winner.txt"));
  if ($winner !== "") {
    echo json_encode(["winner" => $winner]);
  } else {
    echo json_encode(["winner" => null]);
  }
} else {
  echo json_encode(["winner" => null]);
}
