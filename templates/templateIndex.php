<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <script src="./js/funcionesCarrito.js"></script>
</head>

<body>
    <h1>Carrito de la compra</h1>
    <form action="index.php" method="post">

        <?= $tableBody; ?>
        <button type="submit">Añadir</button>
        <a href="user.php">Ver Carrito</a>
    </form>

</body>

</html>