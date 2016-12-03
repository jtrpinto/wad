<?php
$stmt = $conn->prepare('SELECT * FROM wad.appointments');
$stmt->execute();
$categories = $stmt->fetchAll();
?>
