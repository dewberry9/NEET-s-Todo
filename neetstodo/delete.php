<?php
include 'dbInfor.php';

$id = $_GET["id"];

if($id) {
    $database->delete('todo', [
        "AND" => [
            "id" => $id
        ]
    ]);
}
header('location://(your domain)/neetstodo/index.php');
?>