<?php
    function connectDB(){
        $link = mysqli_connect('reviews', 'root', 'root', 'test');
        return $link;
    }

    // Принимаем данные и вводим их в таблицу
    createData($_POST['name'], $_POST['text']);
    function createData($name, $text){
        $name = $_POST['name'];
        $text = $_POST['text'];

        return mysqli_query(connectDB(), "INSERT INTO reviews SET name=\"$name\", massage=\"$text\"");
    }
