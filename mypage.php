<?php
require "db.php";
$stmt = $pdo->prepare("select requestid, photo, title, description, c.name as categoryname, 
s.name as statusname, timestamp from request r join status s on r.statusid = s.statusid 
join category c on r.categoryid = c.categoryid where userlogin = ? order by timestamp desc"); 
$stmt->execute([$_COOKIE['login']]);
$requests = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Личный кабинет</title>
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
          <a class="navbar-brand" href="#">Личный кабинет</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">На главную</a></li>
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
                <li><a href="add.php">Новая заявка</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="exit.php">Выход</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    
    <div class="container graybg">
      <h1>Мои заявки</h1>
      <div class="cards">
        <?php foreach($requests as $request):?>
        <div class="card">
          <img class="pic" src="<?=$request['photo']?>" alt="" />
          <h2><?=$request['title']?></h2>
          <p><?=$request['description']?></p>
          <p>Категория: <?=$request['categoryname']?></p>
          <p>Статус: <?=$request['statusname']?></p>
          <a href="remove.php?id=<?=$request['requestid']?>" class="delbtn">Удалить заявку</a>
          <span class="timestamp"><?=$request['timestamp']?></span>
        </div>
        <?php endforeach;?>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/remove.js"></script>
  </body>
</html>
