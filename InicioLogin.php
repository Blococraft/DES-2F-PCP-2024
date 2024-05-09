<?php
if(Isset($_POST[‘SUBMIT’])){
print_r($_POST[‘nome’]);
print_r($_POST[‘email’]);
print_r($_POST[‘pin’]);
}

?>
  <!doctype html>

<html lang="pt-br">

     <meta charset="uft-8">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <head>

       <title>Inicio Login</title>

       <style>

        body {

            margin: 0;

            padding: 0;

            background-image: url('https://static.vecteezy.com/ti/vetor-gratis/p3/13380876-fundo-vermelho-e-preto-design-de-banner-grafico-de-tecnologia-abstrata-vetor.jpg');

            background-size: cover; /* Cobrir toda a área do corpo */

            background-position: center; /* Centralizar a imagem */

            background-attachment: fixed; /* Manter a imagem fixa enquanto rola */

            height: 100vh; /* Altura igual à altura da janela do navegador */

        }

       

        /* Estilos adicionais para o conteúdo */

        .conteudo {

            padding: 20px;

            color: white;

            text-align: center;

        }

    </style>

    <title>Login</title>

    <style>

        body {

            font-family: Arial, sans-serif;

            background-color: #ffffff;

        }

        .container {

            max-width: 400px;

            margin: 50px auto;

            padding: 20px;

            border-radius: 5px;

            box-shadow: 0 0 10px rgba(5, 5, 5, 0.1);

            background: linear-gradient(to bottom, #f73737, #111111); /* Degrade vertical de branco para um tom mais claro de cinza */

        }

        .container h2 {

            text-align: center;

            margin-bottom: 20px;

        }

        .form-group {

            margin-bottom: 20px;

        }

        .form-group label {

            display: block;

            font-weight: bold;

            margin-bottom: 5px;

        }

        .form-group input {

            width: 100%;

            padding: 10px;

            border: 1px solid #ccc;

            border-radius: 3px;

            box-sizing: border-box;

        }

        .btn {

            display: block;

            width: 100%;

            padding: 10px;

            background-color: #020202;

            color: #fff;

            border: none;

            border-radius: 3px;

            cursor: pointer;

            font-size: 16px;

        }

        .btn:hover {

            background-color: #a31a1a;

        }

    </style>

</head>

<body>

    <div class="container">

        <h2>Login</h2>

        <form action="Iniciologin.php" method="post">

            <div class="form-group">

                <label for="nome">Nome:</label>

                <input type="text" id="nome" name="nome" required>

            </div>

            <div class="form-group">

                <label for="email">Email:</label>

                <input type="email" id="email" name="email" required>

            </div>

            <div class="form-group">

                <label for="senha">Senha:</label>

                <input type="password" id="senha" name="senha" required>

            </div>

            <button type="submit" class="btn">Entrar</button>

        </form>

    </div>

    <script>

        function aumentarFonte(elemento) {

            elemento.style.fontSize = "30px"; // Altere o tamanho da fonte para 18px

        }

    </script>

</body>

</html>
