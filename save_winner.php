<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $data = json_decode(file_get_contents("php://input"), true);
  if (isset($data["winner"])) {
    file_put_contents("winner.txt", $data["winner"]);
    echo json_encode(["status" => "saved"]);
  } else {
    echo json_encode(["status" => "no_winner"]);
  }
}
