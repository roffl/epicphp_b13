<form action="" method="post">
    <input type="text" name="title">
    <textarea name="content" id=""></textarea>
    <input type="submit" name="yeah">
</form>
<?php

if(!empty($_POST['title']) && !empty($_POST['content'])){
    // берем из файла содержимое
    $filename = 'posts/posts.txt';
    $fileContents = file_get_contents($filename);
    // дописываем новый пост через разделитель
    // . или implode

    $fileContents = $_POST['title'] . "\n" . '-----' . "\n" . $_POST['content'] . "\n" . '=====' . "\n" .$fileContents;


    // записываем обновленное содержимое обратно в тот же файл

    file_put_contents($filename, $fileContents);

}

var_dump($_POST);