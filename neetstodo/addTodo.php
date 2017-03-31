<?php
include 'dbInfor.php';

$newTitle = $_POST['addTitle'];
$newContent = $_POST['addContent'];

if ($newTitle != "" || $newContent = "") {
    $database->insert('todo', [
        'title' => $newTitle,
        'content' => $newContent
    ]);
}
header('location:/(your domain)/neetstodo/index.php');
?>