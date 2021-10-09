<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>POST</h2>
    <form action="post.php" method="POST">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <h2>GET</h2>
    <form action="get.php" method="GET">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <button type="submit">Enviar</button>
    </form>
    
    <a href="get.php?idade=25&sobrenome=Fulaninho">Enviar outros dados...</a>

</body>
</html>