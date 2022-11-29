<?php

$todo = ["HTML", "CSS", "Vue", "PHP", "Python"];

// Controllo se c'è la chiave
if (isset($_POST["newToDo"])) {
    $newToDo = $_POST["newToDo"];
    $todo[] = $newToDo;
}
// Parte di invio dei dati
header("Content-Type: application/json");
echo json_encode($todo);
