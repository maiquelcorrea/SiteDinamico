<?php
// Verifica se o usuário solicitou o encerramento da sessão.
if (isset($_GET['loggout'])) {
    Painel::loggout();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
    <script src="https://kit.fontawesome.com/a784bf528b.js" crossorigin="anonymous"></script>
    <title>Painel de controle</title>
</head>

<body>

    <!-- Menu lateral do painel administrativo. -->
    <div class="menu">
        <div class="menu-wraper">
            
            <div class="box-usuario">
                <?php
                // Sem imagem cadastrada, mostra um ícone padrão.
                if ($_SESSION['img'] == '') {
                ?>
                    <div class="avatar-usuario">
                        <i class="fa-solid fa-user"></i>
                    </div>
                <?php } else { ?>
                    <!-- Com imagem cadastrada, carrega o arquivo da pasta uploads. -->
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
                    </div>
                <?php } ?>
                <!-- Mostra o nome e o cargo armazenados na sessão. -->
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div>
            </div>
            <div class="items-menu">
                <h2>cadastro</h2>
                <a href=" <?php echo INCLUDE_PATH_PAINEL; ?>cadastrarDepoimento">Cadastrar depoimentos</a>
                <a href="">Cadastrar serviço</a>
                <a href="">Cadastrar slides</a>

                <h2>Gestão</h2>
                <a href="">Listar Depoimentos</a>
                <a href="">Listar Serviços</a>
                <a href="">Listar slides</a>

                <h2>Administração do Painel</h2>
                <a href="">Editar usuários</a>
                <a href="">Adicionar usuários</a>

                <h2>Configuração Geral</h2>
                <a href="">Editar</a>
            </div>
        </div>
    </div>

    <!-- Barra superior com botão do menu e link para sair. -->
    <header>
        <div class="center">
            <!-- Botão que abre e fecha o menu lateral através do main.js. -->
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="loggout">
                <a href=" <?php echo INCLUDE_PATH_PAINEL; ?> "><i class="fa-solid fa-house"></i>Página inicial</a>

                <!-- Link responsável por encerrar a sessão. -->
                <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?loggout"><i class="fa-solid fa-right-from-bracket"></i><span>Sair</span></a>
            </div>

            <div class="clear"></div>
        </div>
    </header>

    <!-- Área onde o conteúdo do painel será exibido. -->
    <div class="content">
        
    <!-- carregando a pagina home  via classe -->
    <?php Painel::carregarPagina(); ?>

    </div>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/main.js"></script>
</body>

</html>