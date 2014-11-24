<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<ul>
    <li><a href="">Главная</a></li>
    <li><a href="?action=add">добавить запись</a></li>
</ul>
    <?php

    $actions = ['list', 'add', 'post', 'edit', 'delete'];
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    if (in_array($action, $actions)){
        require_once $action . '.php';
    } else {
        echo "not found";
    }




    ?>
</body>
</html>


