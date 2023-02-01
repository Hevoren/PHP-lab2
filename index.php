<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel='stylesheet' type="text/css" href='css/style.css'>
</head>
<body>
<div class="container mt-4">
    <?php
        if(($_COOKIE['user'] ?? '') === ''):
    ?>
  <div class="row">
    <div class="col">
      <h1>Форма регистрации</h1>
      <form class="harry" action="validationForm/check.php" method="post">
        <label><input type="text" class="form-control" name="login" id="login"
                             placeholder="Введите логин"></label>
        <br>
        <label><input type="text" class="form-control" name="name" id="name"
                           placeholder="Введите имя"></label>
        <br>
        <label><input type="password" class="form-control" name="pass" id="pass"
                              placeholder="Введите пароль"></label>
        <br>
        <button class="btn btn-success" type="submit">Зарегистрироваться</button>
      </form>
    </div>
    <div class="col">
      <h1>Форма Авторизации</h1>
      <form class="harry" action="validationForm/auth.php" method="post">
        <label><input type="text" class="form-control" name="login" id="login"
                             placeholder="Введите логин"></label><br>
        <label><input type="password" class="form-control" name="pass" id="pass"
                              placeholder="Введите пароль"></label><br>
        <button class="btn btn-success" type="submit">Войти</button>
      </form>
    </div>
      <?php else:?>
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <h1>Добавить лицо</h1>
                    <form action="send/send.php" method="post">
                        <label><input type="text" class="form-control" name="name" id="name"
                                      placeholder="Введите имя/название"></label><br>
                        <label><input type="text" class="form-control" name="number" id="number"
                            placeholder="Введите номер"></label><br>
                        <label><input type="text" class="form-control" name="adress" id="adress"
                                      placeholder="Введите адресс"></label><br>


                        <input type="radio" name="choice" id="individual-btn" <?php $choices = "ind" ?> value="individual">
                        <label for="individual-btn">Физическое лицо</label><br>

                        <input type="radio" name="choice" id="entity-btn" <?php $choices = "ent" ?> value="entity">
                        <label for="entity-btn">Юридическое лицо</label><br>

                        <button class="btn btn-success" type="submit">Отправить</button>
                    </form>
                </div>
                <div class="col">
                    <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь<<</a></p>
                </div>
            </div>
            <div class="search">
                <h1>Поиск</h1>
                <form action="search/search.php" method="post">
                    <label><input type="text" class="form-control" name="search" id="search"
                                  placeholder="Имя/название"></label><br>
                    <input type="radio" name="choice" id="individual-btn" <?php $choices = "ind" ?> value="individual">
                    <label for="individual-btn">Физическое лицо</label><br>

                    <input type="radio" name="choice" id="entity-btn" <?php $choices = "ent" ?> value="entity">
                    <label for="entity-btn">Юридическое лицо</label><br>

                    <button class="btn btn-success" type="submit">Отправить</button>
                </form>
            </div>
        </div>
      <?php endif;?>
    </div>

</div>
</body>
</html>
