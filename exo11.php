<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exo11.php" method="get">
        <label for="name">name</label>
        <input type="text" id="name" name="name">
        <input type="submit">
    </form>
    <?php if(isset($_GET['name'])): ?>
    <?= $_GET['name']; ?>
    <?php endif ?>
</body>
</html>