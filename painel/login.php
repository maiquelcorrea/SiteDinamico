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
    <!-- Caixa central da tela de login. -->
    <div class="box-login">
        <?php 
           // Verifica se o formulário de login foi enviado.
           if(isset($_POST['acao'])){
                // Recupera o usuário informado no formulário.
                $user = $_POST['user'];
                // Recupera a senha informada no formulário.
                $password = $_POST['password'];
                // Prepara a consulta para localizar o usuário pelas credenciais informadas.
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                // Executa a consulta substituindo os dois parâmetros pelos valores recebidos.
                $sql->execute(array($user,$password));
                // Se exatamente um registro for encontrado, o login é considerado válido.
                if($sql->rowCount() == 1){
                    $info = $sql->fetch();
                    // Login validado: guarda os dados necessários na sessão.
                    $_SESSION['login'] =  true;
                    $_SESSION['user'] = $user;
                    $_SESSION['password'] = $password;
                    $_SESSION['cargo'] = $info['cargo'];
                    $_SESSION['nome'] = $info['nome'];
                    $_SESSION['img'] = $info['img'];
                    
                    // Redireciona o usuário para a área principal do painel.
                    header('location: '.INCLUDE_PATH_PAINEL);
                    die();
                }else{
                    // Nenhum usuário correspondente foi encontrado.
                    echo '<div class="erro-box"><i class="fa-solid fa-circle-xmark"></i> usuario ou senha incorretos!</div>';
                }
           }
        ?>
        <h2>Efetue o Login</h2>
        <!-- Formulário que envia os dados para este mesmo arquivo. -->
        <form method="post" action="">
            <input type="text" name="user" placeholder="Login..." required>
            <input type="password" name="password" placeholder="Senha..." required>
            <input type="submit" name="acao" value="Logar!">
        </form>
    </div>
</body>
</html>