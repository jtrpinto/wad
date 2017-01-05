<?php

function getDiagnosisInfo($med_diag_id){
  global $conn;

  $stmt = $conn->prepare('SELECT * FROM wad.diagnoses WHERE id = ?');
  $stmt->execute(array($med_diag_id));
  $medDiagInfo = $stmt->fetchAll();

  return $medDiagInfo;
}

?>
