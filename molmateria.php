<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O que é MOL - MOLLAB</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container-calcmol {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40vh;
            background-color: #fff;
            font-family: Arial, sans-serif;
        }

        .calculomol {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        select {
            width: 80%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: auto;
            background-color: #6f42c1;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #6f42c1;
        }

        p {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>

<body>
    <header>
        <div class="menu-icon">
            <button onclick=menu()>
                <span>&#9776;</span>
            </button>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Busca">
        </div>
        <div class="logo">
            <button><a href="index.html"><img src="imagens/logo.png" alt="logo"></a></button>
            <button><a href="index.html">INICIO</a></button>
        </div>
        <div class="user-icon">
            <a href="contaSite.html"><img src="imagens/icon.png" alt="icone" width="70px"></a>
        </div>
    </header>

    <div id="panel">
        <button><a href="config.html">Configurações</a></button>
        <button><a href="contaSite.html">Conta</a></button>
        <button><a href="jogos.html">Jogos</a></button>
        <button><a href="quemsomos.html">Quem Somos</a></button>
    </div>
    <main class="mainmateria">
        <div class="titulo">O que é o Mol?</div>
        <div class="materia">
            <p>O Mol é uma unidade usada na química para contar partículas muito pequenas como átomo, íons e moléculas.
                <br><br>
                Assim, como usamos "dúzia" para representar 12 objetos, usamos o mol para representar 6,022 × 10²³
                partículas.
                <br><br>
                Esse número é chamado de Número de Avogadro.
            </p>
            <br><br>
            <br><br>
            <p>O termo mol vem da palavra em latim moles, que significa “uma massa”, e foi introduzido pelo químico
                alemão Wilhelm Ostwald.</p>
        </div>

        <br><br>
        <br><br>
        <div>
            <img src="imagens/OIP.webp" alt="MOL">
        </div>
    </main>



    <div class="container-calcmol">
        <div class='calculomol'>
            <form method="POST" action="">
                <label for="opcao">O que você deseja calcular?</label>
                <select name="opcao" id="opcao">
                    <option value="">--Selecione--</option>
                    <option value="1" <?php if (isset($_POST['opcao']) && $_POST['opcao'] == '1')
                        echo 'selected'; ?>>Quantidade de mols
                    </option>
                    <option value="2" <?php if (isset($_POST['opcao']) && $_POST['opcao'] == '2')
                        echo 'selected'; ?>>Massa
                        molar (g/mol)
                    </option>
                    <option value="3" <?php if (isset($_POST['opcao']) && $_POST['opcao'] == '3')
                        echo 'selected'; ?>>Massa
                        (g)
                    </option>
                </select>
                <input type="submit" name="selecionar" value="Enviar">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $opcao = $_POST['opcao'] ?? '';
                // Quando clicar em Calcular
                if (isset($_POST['calcular'])) {
                    $num1 = $_POST['num1'] ?? 0;
                    $num2 = $_POST['num2'] ?? 0;
                    $opcao = $_POST['opcao'];
                    switch ($opcao) {
                        case '1': // Quantidade de mols: n = m / M
                            if ($num2 != 0) {
                                $resultado = $num1 / $num2;
                                echo "<p>Quantidade de mols (n) = <strong>$resultado mol</strong></p>";
                            } else {
                                echo "<p>Erro: a massa molar não pode ser zero.</p>";
                            }
                            break;
                        case '2': // Massa molar: M = m / n
                            if ($num2 != 0) {
                                $resultado = $num1 / $num2;
                                echo "<p>Massa molar (M) = <strong>$resultado g/mol</strong></p>";
                            } else {
                                echo "<p>Erro: a quantidade de mols não pode ser zero.</p>";
                            }
                            break;
                        case '3': // Massa: m = n × M
                            $resultado = $num1 * $num2;
                            echo "<p>Massa (m) = <strong>$resultado g</strong></p>";
                            break;
                    }
                }
                // Mostrar o formulário específico da opção escolhida
                switch ($opcao) {
                    case '1':
                        echo "<script>location.hash='op1';</script>";
                        echo "
                        <form id = 'op1' method='POST' action=''>
                        <input type='hidden' name='opcao' value='1'>
                        <label>Massa (g):</label>
                        <input type='number' step='any' name='num1' required>
                        <label>Massa molar (g/mol):</label>
                        <input type='number' step='any' name='num2' required>
                        <input type='submit' name='calcular' value='Calcular'>
                        </form>";
                        break;
                    case '2':
                        echo "<script>location.hash='op2';</script>";
                        echo "
                        <form id = 'op2' method='POST' action=''>
                        <input type='hidden' name='opcao' value='2'>
                        <label>Massa (g):</label>
                        <input type='number' step='any' name='num1' required>
                        <label>Quantidade de mols (mol):</label>
                        <input type='number' step='any' name='num2' required>
                        <input type='submit' name='calcular' value='Calcular'>
                        </form>
                        ";
                        break;
                    case '3':
                        echo "<script>location.hash='op3';</script>";
                        echo "
                        <form id = 'op3' method='POST' action=''>
                        <input type='hidden' name='opcao' value='3'>
                        <label>Quantidade de mols (mol):</label>
                        <input type='number' step='any' name='num1' required>
                        <label>Massa molar (g/mol):</label>
                        <input type='number' step='any' name='num2' required>
                        <input type='submit' name='calcular' value='Calcular'>
                        </form>
                        ";
                        break;
                }
            }
            ?>
        </div>
    </div>
    <aside id="sidebar">
        <h3>Jogos</h3>
        <a href="jogos.html"><img src="imagens/OIP.webp" alt="Jogo 1"></a>
        <h3>QuiMol</h3>
        <a href="jogos.html"><img src="imagens/tabelaperiodica.jpg" alt="Jogo 2"></a>
        <h3>Tabela Periódica</h3>
        <a href="jogos.html">Mais Jogos</a>
    </aside>
    <script src="script.js"></script>
</body>

</html>