<?php
// Carrega as configurações antes de montar a página.
    include('config.php');
?>

<?php 
/* carrega a classe para ver quantos usuarios acessaram o site */
    Site::atualizarUsuarioOnline();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a784bf528b.js" crossorigin="anonymous"></script>
    <title>Projeto 01</title>
</head>

<body>
    <?php
    // Descobre qual página foi solicitada; sem URL, a página padrão é home.
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    // Algumas rotas apontam para seções específicas da página inicial.
    switch ($url) {
        case 'depoimentos':
            echo '<target target="depoimentos" />';
            break;
        case 'servicos':
            echo '<target target="servicos" />';
            break;
    }
    ?>

    <!-- Mensagem mostrada pelo AJAX quando o formulário é enviado com sucesso. -->
    <div class="sucesso">Formulario enviado com sucesso!</div>
    <!-- Mensagem mostrada pelo AJAX quando o formulário não é enviado. -->
    <div class="erro">Formulario nao enviado devido a um erro!</div>
    <!-- Overlay mostrado enquanto o AJAX está processando o envio. -->
    <div class="overlay-loading">
        <img src="<?php echo INCLUDE_PATH; ?>images/ajax-loader.gif" alt="">
    </div>

    <!-- Cabeçalho principal do site. -->
    <header>
        <div class="center">
            <div class="logo left"><a href="/">logoMarca</a></div>
            <!-- Navegação para telas maiores. -->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <!-- Navegação alternativa para telas menores. -->
            <nav class="mobile right">
                <div class="menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>

    <?php


    // Procura o arquivo PHP correspondente à URL solicitada.
    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
    } else {
        // A página não existe; aqui definimos o comportamento de fallback.
        if ($url != 'depoimentos' && $url != 'servicos') {
            $pagina404 = true;
            include('pages/404.php');
        } else {
            include('pages/home.php');
        }
    }
    ?>

    <!-- Rodapé da página. Na página 404 ele pode ficar fixo no final da tela. -->
    <footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"' ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php if ($url == 'contato') { ?>
        <!-- O Google Maps só é carregado quando a página atual é contato. -->
        <script>
            (g => {
                var h, a, k, p = "The Google Maps JavaScript API",
                    c = "google",
                    l = "importLibrary",
                    q = "__ib__",
                    m = document,
                    b = window;
                b = b[c] || (b[c] = {});
                var d = b.maps || (b.maps = {}),
                    r = new Set,
                    e = new URLSearchParams,
                    u = () => h || (h = new Promise(async (f, n) => {
                        await (a = m.createElement("script"));
                        e.set("libraries", [...r] + "");
                        for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                        e.set("callback", c + ".maps." + q);
                        a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                        d[q] = f;
                        a.onerror = () => h = n(Error(p + " could not load."));
                        a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                        m.head.append(a)
                    }));
                d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
            })({
                key: "AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4",
                v: "weekly",
            });
        </script>
        <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>
    <!-- Disponibiliza o caminho base para o JavaScript. -->
    <script>var include_path = '<?php echo INCLUDE_PATH; ?>'</script>
    <script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>

</html>