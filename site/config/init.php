<?php
$conn = new PDO('pgsql:host=dbm.fe.up.pt;port=5432;dbname=tweb1601','tweb1601','Monet1840');
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$conn->query("SET SCHEMA 'public'");

session_start();
?>
