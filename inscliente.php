<?php

@session_start();
include ('conexao.php');


//------------------NOME--------------------

$nome = $_POST['nome'];
function validarNome($nome)
{
    if (preg_match('/[^a-záéíóúâêîôûàèìòùãõç\s]/i', $nome)) {
        return false;
    }
    $nome = strtolower($nome);
    $nome = trim($nome);
    if (empty($nome)) {
        return false;
    }
    if ($nome != $nome) {
        return false;
    }
    return $nome;
}
$nome = validarNome($nome);
if ($nome === false) {
    echo "<script>window.history.back();</script>";
    echo "<script>alert('Nome inválido. Por favor, insira apenas letras e espaços.')</script>";
} else {

    //------------------CPF--------------------

    $cpf = $_POST['cpf'];
    $cpf = str_replace('-', '', $cpf);
    $cpf = str_replace('.', '', $cpf);
    if (strlen($cpf) != 11) {
        echo "<script>window.history.back();</script>";
        echo "<script>alert('CPF Inválido');</script>";
        exit;
    } else {

        //------------------EMAIL--------------------

        $email = $_POST['email'];
        function validarEmail($email)
        {
            $email = trim($email);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $dominio = substr(strrchr($email, "@"), 1);
                $dominiosPermitidos = array("gmail.com", "outlook.com", "yahoo.com");
                if (in_array($dominio, $dominiosPermitidos)) {
                    return $email;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        $email = validarEmail($email);
        if ($email === false) {
            echo "<script>window.history.back();</script>";
            echo "<script>alert('Email inválido. Por favor, insira um email válido.')</script>";
        } else {

            //------------------SENHA--------------------
            function verificarSenhas($senha, $confsenha)
            {

                if ($senha === $confsenha) {
                    return true;
                } else {
                    return false;
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $senha = md5($_POST["senha"]);
                $confsenha = md5($_POST["confsenha"]);

                if (verificarSenhas($senha, $confsenha)) {


                    $telefone = $_POST['telefone'];

                    // Função para validar o número de telefone
                    function validarTelefone($telefone)
                    {
                        // Remove todos os caracteres não numéricos do telefone
                        $telefone = preg_replace("/[^0-9]/", "", $telefone);

                        // Verifica se o número de telefone tem 11 dígitos
                        if (strlen($telefone) !== 11) {
                            return false;
                        }

                        return true;
                    }

                    // Função para formatar o número de telefone
                    function formatarTelefone($telefone)
                    {
                        // Formata o telefone com parênteses, hífen e DDD
                        $telefone = "(" . substr($telefone, 0, 2) . ")" . substr($telefone, 2, 5) . "-" . substr($telefone, 7);

                        return $telefone;
                    }

                    // Processamento do formulário
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $telefone = $_POST["telefone"];

                        // Verifica se o número de telefone é válido
                        if (validarTelefone($telefone)) {
                            // Formatar o telefone
                            $telefone = formatarTelefone($telefone);



                            $idnivelacesso = isset($_POST['idnivelacesso']) ? $_POST['idnivelacesso'] : 3;

                            //insert into nometabela (nomes das tabelas do bd)
                            $sql = "INSERT INTO tblusuarios (nome,cpf,email,senha,telefone,idnivelacesso) values ('$nome', '$cpf', '$email', '$senha', '$telefone', '$idnivelacesso')";

                            $qry = mysqli_query($con, $sql);

                        } else {
                            // Exibe um prompt de aviso se o número de telefone for inválido
                            echo "<script>alert('Número de telefone inválido. Por favor, insira um número de telefone válido com 11 dígitos.');</script>";
                        }
                    }
                } else {
                    // As senhas não correspondem, exibe uma mensagem de erro
                    echo "<script>window.history.back();</script>";
                    echo "<script>alert('Senhas não conferem.')</script>";
                }
            }
            if ($qry) { 
    ?>
                <!DOCTYPE html>
                <html lang="pt">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Cadastro Efetuado com Sucesso</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            text-align: center;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            height: 100vh; /* Para centralizar verticalmente */
                        }
                        .container {
                            width: 300px;
                        }
                        h2 {
                            color: green;
                        }
                        .btn {
                            display: inline-block;
                            padding: 10px 20px;
                            margin: 10px;
                            background-color: #4CAF50;
                            color: white;
                            text-decoration: none;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                        }
                        .btn:hover {
                            background-color: #45a049;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <h2>Cadastro Efetuado com Sucesso!</h2>
                        <p>O seu cadastro foi realizado com sucesso.</p>
                        <a href="login.php" class="btn">Continuar</a>
                        <a href="cadcliente.php" class="btn">Voltar</a>
                    </div>
                </body>
                </html>
                
    <?php
                //echo "Cadastrado com sucesso";
                //echo "<a href='login.php'>Continuar</a> - <a href='cadcliente.php'>Voltar</a>";
            } else {
                echo "Não Cadastrado<br>";
                echo "Informe ao ADM - <a href='cadcliente.php'>Voltar</a>";
            }
        }
    }
}