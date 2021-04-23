<?php
    function connectDB(){
        $link = mysqli_connect('reviews', 'root', 'root', 'test') or die
        (mysqli_error($link));
        mysqli_query($link, "SET NAMES 'utf-8'");
        return $link;
    }

    function createReviews($name, $text){
        $link = connectDB();
        $data = date('Y-m-d H:i:s');

        return mysqli_query($link, "INSERT INTO reviews_db SET name=\"$name\", massage=\"$text\", data = \"$data\"");
    }

    // функция для создания самих статей

    function getReviews(){
        $link = connectDB();
        $result = mysqli_query($link, "SELECT * FROM reviews_db WHERE id > 0 ORDER BY id DESC LIMIT 3");

        for ($review = []; $row = mysqli_fetch_assoc($result); $review[] = $row);


        foreach ($review as $elem) {?>
        <div class="note">
            <p id="user">
                <span class="date"><?=$elem['data']?></span>
                <span class="name"><b><?=$elem['name']?></b></span>
            </p>
                <p id="message"><?=$elem['massage']?><p>
        </div>
        <?php
        }
    }
?>
