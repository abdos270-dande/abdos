<?php
$conn = new mysqli("sql304.infinityfree.com", "if0_39393071", "YjlT8G8HtGbMEC", "if0_39393071_draw_app");
$result = $conn->query("SELECT name FROM winner WHERE id = 1");
$row = $result->fetch_assoc();
echo $row ? $row["name"] : "";
?>
