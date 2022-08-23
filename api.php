<?php
require('config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    query("INSERT INTO tasks (task) VALUES ('$task')");
    echo json_encode(['success' => 'true']);
}

?>