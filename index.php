<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
    <?php
    require_once 'functions/functions.php';

    if(!empty ($_POST)){
        $link = connectDB();
        createReviews($_POST['name'], $_POST['text']);?>
    <?php
    }
    ?>
		<div id="wrapper">
			<h1>Гостевая книга</h1>
				<?php
                    getReviews();
				?>
            <?php
                if (isset($_POST['submit'])){
            ?>
                <div class="info alert alert-info">
                    Запись успешно сохранена!
                </div>
            <?php
            }
            ?>
			<div id="form">
				<form action="" method="POST">
					<p><input type="text" name="name" class="form-control" placeholder="Ваше имя"></p>
					<p><textarea  name="text" class="form-control" placeholder="Ваш отзыв"></textarea></p>
					<p><input  type="submit" name="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				</form>
			</div>
		</div>
	</body>
</html>

