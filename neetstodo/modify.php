<?php
include 'dbInfor.php';

$id = $_POST['id'];
$newTitle = $_POST['addTitle'];
$newContent = $_POST['addContent'];

if (!empty($_POST)) {
    $database->update('todo', [
        "title" => $newTitle,
        "content" => $newContent
    ], [
        "id" => $id
    ]);
}
header('location:/(your domain)/neetstodo/index.php');
?>