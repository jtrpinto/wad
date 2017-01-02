<?php
/*
  function createUser($username, $password) {
    global $conn;  
    
    $stmt = $conn->prepare('INSERT INTO doctors VALUES (?, ?)');
    $stmt->execute(array($username, $password));
  }*/

  function verifyUser($username, $password) {
    global $conn;  
    
    $stmt = $conn->prepare('SELECT username, password FROM doctors WHERE username LIKE ? AND password LIKE ?');
    $stmt->execute(array($username, $password));
    return ($stmt->fetch() !== false);
  }

/*===== Get doctor's photo =====*/
  function getDoctorsPhoto($username){
    global $conn;

    $stmt = $conn->prepare('SELECT username, citizen_id FROM doctors WHERE username LIKE $userneme');
    $stmt->execute(array($username, $citizen_id));
    return $stmt;
  }


?>
