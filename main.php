
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Заголовок страницы в браузере</title>
    <link rel="stylesheet" href="/ccs/main.css">
</head>
<body>
<div class="container">
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
    <form action="main.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1" value="<?php echo $_POST['firstname'] ?? '' ?>" placeholder="Имя">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname" id="exampleFormControlInput2" value="<?php echo $_POST['lastname'] ?? '' ?>" placeholder="Фамилия">
        </div>
        <button>Сохранить</button>
    </form>
    <?php
    }
    ?>
</div>
<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<b>firstname</b> = ' . ($_POST['firstname'] ?? '') . '<br>';
        echo 'lastname = ' . ($_POST['lastname'] ?? '');
    }
    ?>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>