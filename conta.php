<?php
    $aleatorio = mt_rand(0,3);

?>





<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta - MOLLAB</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="menu-icon">
            <button onclick="menu()">
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
    <?php if($aleatorio == 0){ ?>
        <div class="containerconta-config">
            <main class="conta-container">
                <h1>Minha Conta</h1>
                <section class="perfil">
                    <img src="imagens/icon.png" alt="foto de perfil" width="120px">
                    <p><strong>Usuário:</strong> João</p>
                    <p><strong>Email:</strong> joao@example.com</p>
                    <button class="editar-btn">Editar perfil</button>
                </section>
                <section class="seguranca">
                    <h2>Segurança</h2>
                    <button>Alterar senha</button>
                    <button>Excluir conta</button>
                </section>
                <section class="atividade">
                    <h2>Atividade recente</h2>
                    <ul>
                        <li>Jogou "Lab Runner" ontem</li>
                        <li>Atualizou o perfil 3 dias atrás</li>
                        <li>Criou conta há 1 semanas</li>
                    </ul>
                </section>
            </main>
        </div>
    <?php } elseif ($aleatorio == 1) { ?>
        <div class="containerconta-config">
            <main class="conta-container">
                <h1>Minha Conta</h1>
                <section class="perfil">
                    <img src="imagens/pixelArtBticoin.jpg" alt="foto de perfil" width="120px">
                    <p><strong>Usuário:</strong> Cleiton</p>
                    <p><strong>Email:</strong> cleitinho@example.com</p>
                    <button class="editar-btn">Editar perfil</button>
                </section>
                <section class="seguranca">
                    <h2>Segurança</h2>
                    <button>Alterar senha</button>
                    <button>Excluir conta</button>
                </section>
                <section class="atividade">
                    <h2>Atividade recente</h2>
                    <ul>
                        <li>Jogou "pHunters" ontem</li>
                        <li>Atualizou o perfil 3 meses atrás</li>
                        <li>Criou conta há 3 meses</li>
                    </ul>
                </section>
            </main>
        </div>
    <?php } elseif($aleatorio == 2){ ?>
        <div class="containerconta-config">
            <main class="conta-container">
                <h1>Minha Conta</h1>
                <section class="perfil">
                    <img src="imagens/781408dc-c77b-4915-8931-c5ace9a0f23a.jpg" alt="foto de perfil" width="120px">
                    <p><strong>Usuário:</strong> Adrian</p>
                    <p><strong>Email:</strong> gay@example.com</p>
                    <button class="editar-btn">Editar perfil</button>
                </section>
                <section class="seguranca">
                    <h2>Segurança</h2>
                    <button>Alterar senha</button>
                    <button>Excluir conta</button>
                </section>
                <section class="atividade">
                    <h2>Atividade recente</h2>
                    <ul>
                        <li>Não jogou nada ainda</li>
                        <li>Atualizou o perfil hoje</li>
                        <li>Criou conta hoje</li>
                    </ul>
                </section>
            </main>
        </div>
    <?php }else{ ?>
        <div class="containerconta-config">
            <main class="conta-container">
                <h1>Minha Conta</h1>
                <section class="perfil">
                    <img src="imagens/Olho.jpg" alt="foto de perfil" width="120px">
                    <p><strong>Usuário:</strong> ze ninguem</p>
                    <p><strong>Email:</strong> ninguem@example.com</p>
                    <button class="editar-btn">Editar perfil</button>
                </section>
                <section class="seguranca">
                    <h2>Segurança</h2>
                    <button>Alterar senha</button>
                    <button>Excluir conta</button>
                </section>
                <section class="atividade">
                    <h2>Atividade recente</h2>
                    <ul>
                        <li>Jogou dark souls ano passado</li>
                        <li>Atualizou o perfil antes de ontem</li>
                        <li>Criou conta há 20 anos</li>
                    </ul>
                </section>
            </main>
        </div>
    <?php }?>
    <script src="script.js"></script>
</body>

</html>
