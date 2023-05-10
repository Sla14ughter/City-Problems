<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Администратор</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
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
          <a class="navbar-brand" href="#">Панель администратора</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">На главную</a></li>
            <li class="dropdown">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                role="button"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Иванов И.И.
                <span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li><a href="add.html">Новая заявка</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="index.php">Выход</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div class="container graybg">
      <h1>Заявки</h1>
      <div class="cards">
        <div class="card">
          <img class="pic" src="../img/problem2.png" alt="" />
          <h2>Яма на дороге</h2>
          <p>
            Что за хуйня? Ёбаные соседи сверху набухались и скинули гирю с
            балкона прямо на дорогу! Теперь тут огромная дыра!!1!1 Заделайте уже
            её нахуй.
          </p>
          <p>Категория: Ремонт дорог</p>
          <p>
            Статус заявки:
            <select name="status" id="status">
              <option value="1">Новая</option>
              <option value="2">Решена</option>
              <option value="3">Отклонена</option>
            </select>
          </p>
          <a href="remove.php?id=value" class="updbtn">Обновить статус</a>
          <span class="timestamp">27.04.2023 9:00</span>
        </div>
        <div class="card">
          <img class="pic" src="../img/problem2.png" alt="" />
          <h2>Яма на дороге</h2>
          <p>
            Что за хуйня? Ёбаные соседи сверху набухались и скинули гирю с
            балкона прямо на дорогу! Теперь тут огромная дыра!!1!1 Заделайте уже
            её нахуй.
          </p>
          <p>Категория: Ремонт дорог</p>
          <p>
            Статус заявки:
            <select name="status" id="status">
              <option value="1">Новая</option>
              <option value="2">Решена</option>
              <option value="3">Отклонена</option>
            </select>
          </p>
          <a href="remove.php?id=value" class="updbtn">Обновить статус</a>
          <span class="timestamp">27.04.2023 9:00</span>
        </div>
        <div class="card">
          <img class="pic" src="../img/problem2.png" alt="" />
          <h2>Яма на дороге</h2>
          <p>
            Что за хуйня? Ёбаные соседи сверху набухались и скинули гирю с
            балкона прямо на дорогу! Теперь тут огромная дыра!!1!1 Заделайте уже
            её нахуй.
          </p>
          <p>Категория: Ремонт дорог</p>
          <p>
            Статус заявки:
            <select name="status" id="status">
              <option value="1">Новая</option>
              <option value="2">Решена</option>
              <option value="3">Отклонена</option>
            </select>
          </p>
          <a href="remove.php?id=value" class="updbtn">Обновить статус</a>
          <span class="timestamp">27.04.2023 9:00</span>
        </div>
        <div class="card">
          <img class="pic" src="../img/GoToPitRoad2.jpg" alt="" />
          <h2>Яма на дороге</h2>
          <p>
            ААААА БЛЯТЬ КРОКОДИЛ В ЯМЕ НАХУЙ!!1!11! АААА СПАСИТЕ ОН МЕНЯ ЩАС
            СОЖРЁТ!1!!1!
          </p>
          <p>Категория: Ремонт дорог</p>
          <p>
            Статус заявки:
            <select name="status" id="status">
              <option value="1">Новая</option>
              <option value="2">Решена</option>
              <option value="3">Отклонена</option>
            </select>
          </p>
          <a href="remove.php?id=value" class="updbtn">Обновить статус</a>
          <span class="timestamp">27.04.2023 9:00</span>
        </div>
        <div class="card">
          <img class="pic" src="../img/problem2.png" alt="" />
          <h2>Яма на дороге</h2>
          <p>
            Что за хуйня? Ёбаные соседи сверху набухались и скинули гирю с
            балкона прямо на дорогу! Теперь тут огромная дыра!!1!1 Заделайте уже
            её нахуй.
          </p>
          <p>Категория: Ремонт дорог</p>
          <p>
            Статус заявки:
            <select name="status" id="status">
              <option value="1">Новая</option>
              <option value="2">Решена</option>
              <option value="3">Отклонена</option>
            </select>
          </p>
          <a href="remove.php?id=value" class="updbtn">Обновить статус</a>
          <span class="timestamp">27.04.2023 9:00</span>
        </div>
      </div>
    </div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>