<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <style>
        body {
            text-align: center;
        }

        input {
            margin: 0;
            margin-bottom: 40px;
        }

        form {
            margin-top: 20px;
            margin: auto;
            border: black 2px solid;
            width: 200px;
            height: auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="POST">
        <h1>Escreva a palavra</h1>
        <input type="text" name="palavra">
        <input type="submit" name="butao">
        <?php

        if (isset($_POST['butao'])){
        if(!empty($_POST['palavra'])) {
            $palavra = $_POST['palavra'];
            $cu = strlen($palavra);
            for ($i = 1; $i < $cu + 1; $i++) {
                echo "<br>" . $i;
            }
        }else {
            echo  "<script>alert('Escreve algo ai o cabeça de PIKA ');</script>";
        }
        } 
        ?>
    </form>
</body>

</html>