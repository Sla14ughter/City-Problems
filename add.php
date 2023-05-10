<?php
require_once "db.php";
$stmt = $pdo->query("select * from category");
$category = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Добавить заявку</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="form-wrapper">
        <form action="addrequest.php" method="POST" enctype="multipart/form-data">
          <div class="register">
            <p>Название:</p>
            <input type="text" class="input" name="title" id="title" required />
          </div>
          <div class="register">
            <p>Фото:</p>
            <input type="file" name="img" id="img" class="custom-file-input" required/>
          </div>
          <div class="register">
            <p>Категория:</p>
            <select name="category" id="category" required>
              <?php foreach($category as $cat): ?>
                <option value = "<?= $cat['categoryid'] ?>"><?= $cat['name'] ?></option>
              <?php endforeach?>
            </select>
          </div>
          <div class="register">
            <p>Описание</p>
            <textarea
              name="description"
              id="description"
              required
              rows="10"
              maxlength="1000"
            ></textarea>
            <span class="symb" id="symb">0/1000</span>
          </div>
          <button class="reg" name="registr" type="submit" id="regbtn">
            Отправить
          </button>
        </form>
        <a href="index.php"><button class="otm">Отмена</button></a>
      </div>
    </div>
    <script src="js/counter.js"></script>
  </body>
</html>
