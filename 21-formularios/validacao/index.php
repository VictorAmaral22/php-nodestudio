<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    /**Validações
     * Funções (filter_input - filter_var)
     * FILTER_VALIDATE_INT
     * FILTER_VALIDATE_EMAIL
     * FILTER_VALIDATE_FLOAT
     * FILTER_VALIDATE_IP
     * FILTER_VALIDATE_URL
     */
    ?>
    
    <?php
        if(isset($_POST['enviar-form'])){
            $erros = array();

            if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
                $erros[] = "Idade precisa ser um inteiro!";
            }
            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
                $erros[] = "Emai Inválido!";
            }
            if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
                $erros[] = "Peso precisa ser float!";
            }
            if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
                $erros[] = "Ip inválido!";
            }
            if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
                $erros[] = "URL inválido!";
            }

            if(!empty($erros)){
                foreach($erros as $err){
                    echo "<li> $err </li>";
                }
            } else {
                echo "Parabéns, seus dados estão corretos!";
            }


        }
            
        // var_dump($_POST);
        /*
        C:\wamp64\www\cursophp.com\21-formularios\validacao\index.php:36:
        array (size=5)
            'idade' => string '' (length=0)
            'email' => string '' (length=0)
            'peso' => string '' (length=0)
            'ip' => string '' (length=0)
            'url' => string '' (length=0)
            'enviar-form' => string '' (length=0)
        */
    ?>

    <br>

    <h3>Formulário</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        Ip: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-form">Enviar</button>
    </form>
    

</body>
</html>