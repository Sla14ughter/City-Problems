<?php
require "db.php";
$stmt = $pdo->query("select photo, title, description, c.name as categoryname, 
s.name as statusname, timestamp from request r join status s on r.statusid = s.statusid 
join category c on r.categoryid = c.categoryid where r.statusid = 2 order by timestamp desc limit 8"); 
$requests = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Улучши свой город</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Городской портал</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <?php if (!isset($_COOKIE["name"])):?>
            <li class="active"><a href="#">Главная</a></li>
            <li><a href="register.html">Зарегистрироваться</a></li>
            <li><a href="login.html">Войти</a></li>
            <?php else:?>
            <li class="dropdown">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                role="button"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <?php if (isset($_COOKIE["name"])):?><?=$_COOKIE["name"]?><?php endif?>
                <span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li><a href="mypage.php">Мои заявки</a></li>
                <li><a href="add.php">Новая заявка</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="exit.php">Выход</a></li>
              </ul>
            </li>
            <?php endif?>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <?php if (!isset($_COOKIE["name"])):?>
    <div class="jumbotron">
      <div class="container">
        <h1>Привет, дорогой друг!</h1>
        <p>
          Вместе мы сможем улучшить наш любимый город. Нам очень сложно узнать
          обо всех проблемах города, поэтому мы предлагаем тебе помочь своему
          городу!
        </p>
        <p>Увидел проблему? Дай нам знать о ней и мы ее решим!</p>
        <p>
          <a class="btn btn-success btn-lg" href="login.html" role="button"
            >Сообщить о проблеме</a
          >
          <a class="btn btn-primary btn-lg" href="register.html" role="button"
            >Присоедениться к проекту</a
          >
        </p>
      </div>
    </div>
    <?php endif?>
    <div class="container graybg">
      <h1>Последние решенные проблемы</h1>
      <div class="cards">
        <?php foreach($requests as $request):?>
        <div class="card">
          <img class="pic" src="<?=$request['photo']?>" alt="" />
          <h2><?=$request['title']?></h2>
          <p><?=$request['description']?></p>
          <p>Категория: <?=$request['categoryname']?></p>
          <p>Статус: <?=$request['statusname']?></p>
          <span class="timestamp"><?=$request['timestamp']?></span>
        </div>
        <?php endforeach;?>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
