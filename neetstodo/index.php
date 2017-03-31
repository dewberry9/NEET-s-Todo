<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>NEET's Todo List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
        <link href="/(your domain)/neetstodo/NanumBarunGothic/nanumbarungothic.css" rel="stylesheet">
        <link href="/(your domain)/neetstodo/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="/(your domain)/neetstodo/favicon.ico" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="pure-g">
        <div class="pure-u-1-5 header">
                <div class="sidebar">
                    <div class="title">
                        <h1>NEET's Todo</h1>
                        <h2>니트의 투두 리스트</h2>
                    </div>
                </div>
        </div>
        <div class="pure-u-1-5"></div>
        <div class="pure-u-3-5">
            <div class="content">
                <h3>Todo</h3>
                <ul>
                    <?php
                    include 'dbInfor.php';
                    $datas = $database->select("todo", ["id", "title", "content"]);
                    foreach($datas as $con) {
                        echo '<li class="visual-mode"><div class="list-content"><span class="todo-title">'.$con["title"].'</span><br><p class="todo-content">'.$con["content"].'</p><div class="buttons"><a href="//localhost/phpTest/todoList/delete.php?id='.$con["id"].'" class="pure-button delete-button">삭제</a><a class="pure-button modify-button">수정</a></div></div>';
                        echo '<div class="modify-form"><a class="pure-button cancel-button">취소</a><form class="pure-form" method="POST" action="./modify.php/?id='.$con["id"].'"><fieldset class="pure-group"><input name="id" type="text" style="display: none;" value="'.$con["id"].'"><input name="addTitle" type="text" class="pure-input-1" value="'.$con["title"].'"><textarea name="addContent" class="pure-input-1">'.$con["content"].'</textarea></fieldset><p><button type="submit" class="pure-button pure-input-1-5 pure-button-primary submit-button">수정하기</button></p></form></div>';
                        echo '</li><hr class="todo-line">';
                    }
                    ?>
                </ul>
                <form class="pure-form" method="POST" action="./addTodo.php">
                    <fieldset class="pure-group">
                        <input name="addTitle" type="text" class="pure-input-1" placeholder="제목">
                        <textarea name="addContent" class="pure-input-1" placeholder="내용"></textarea>
                    </fieldset>
                    <button type="submit" class="pure-button pure-input-1-5 pure-button-primary submit-button">저장하기</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('.modify-form').hide();
        $('.modify-button').click(function() {
            $(this).parent().parent().parent().children('.modify-form').toggle();
            $(this).parent().parent().toggle();
        });
        $('.cancel-button').click(function() {
            $(this).parent().toggle();
            $(this).parent().parent().children('.list-content').toggle();
        });
    </script>
    </body>
</html>