<?php
$conn = new mysqli("sql304.infinityfree.com", "if0_39393071", "YjlT8G8HtGbMEC", "if0_39393071_draw_app");
$conn->set_charset("utf8");

$result = $conn->query("SELECT name FROM participants");
$names = [];

while ($row = $result->fetch_assoc()) {
  $names[] = $row['name'];
}

echo implode("\n", $names);
?>
