<!-- Banner principal: as imagens são alternadas pelo slider.js. -->
<section class="banner-container">
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/background.jpg');" class="banner-single"></div>
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/background2.jpg');" class="banner-single"></div>
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/background3.jpg');" class="banner-single"></div>
    <!-- Camada escura sobre o banner para melhorar a leitura do formulário. -->
    <div class="overlay"></div>
    <!-- Formulário principal de cadastro de e-mail. -->
    <div class="center">
        <form method="POST" action="">
            <h2>Qual seu melhor e-mail?</h2>
            <input type="email" name="email" required>
            <input type="hidden" name="identificador" value="form_home">
            <input type="submit" name="acao" value="Cadastrar!" required>
        </form>
    </div><!-- center -->
    <!-- Indicadores que mostram qual slide está ativo. -->
    <div class="bullets">
        <span class="active-slider"></span>
    </div>
</section>

<!-- Seção de apresentação do autor/projeto. -->
<section class="descricao-autor">
    <div class="center">
        <div class="w50 left">
            <h2>Maiquel Correa S.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor urna nibh, a venenatis lectus scelerisque nec. Maecenas viverra justo eget orci blandit, sit amet iaculis ex aliquet. In ante mauris, tincidunt eget lorem ut, pellentesque vehicula mi. Fusce enim ante, pretium sit amet justo et, lobortis iaculis enim. Pellentesque non rhoncus ex, non elementum metus. Vivamus nec neque eu ligula vehicula maximus id a lorem. Donec convallis erat id erat accumsan viverra. Proin laoreet eget metus ac finibus. Praesent vestibulum purus vitae porttitor volutpat. Nullam tortor dolor, consectetur vel auctor in, convallis vitae metus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor urna nibh, a venenatis lectus scelerisque nec. Maecenas viverra justo eget orci blandit, sit amet iaculis ex aliquet. In ante mauris, tincidunt eget lorem ut, pellentesque vehicula mi. Fusce enim ante, pretium sit amet justo et, lobortis iaculis enim. Pellentesque non rhoncus ex, non elementum metus. Vivamus nec neque eu ligula vehicula maximus id a lorem. Donec convallis erat id erat accumsan viverra. Proin laoreet eget metus ac finibus. Praesent vestibulum purus vitae porttitor volutpat. Nullam tortor dolor, consectetur vel auctor in, convallis vitae metus.</p>
        </div>
        <div class="w50 left">
            <img class="rigth" src="<?php echo INCLUDE_PATH; ?>images/foto.jpg" alt="" width="400" height="460">
        </div>
        <div class="clear"></div>
    </div>
</section>

<!-- Seção que apresenta as tecnologias/especialidades. -->
<section class="especialidades">
    <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-css3-alt"></i></h3>
            <h4>CSS3</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis lobortis nist ut</p>
        </div>
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-js"></i></h3>
            <h4>javaScript</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis lobortis nist ut</p>
        </div>
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-php"></i></h3>
            <h4>PHP</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis lobortis nist ut</p>
        </div>
        <div class="clear"></div>
    </div>
</section>

<!-- Seção inferior com depoimentos e serviços. -->
<section class="extras">
    <div class="center">
        <div id="depoimentos" class="w50 left depoimentos-container">
            <h2 class="title">Depoimentos dos nossos clientes</h2>
            <div class="depoimentos-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis lobortis nist ut quis nostrud exercitation ullamco ullamco dolor in he...</p>
                <p class="nome-autor">Lorem ipsum</p>
            </div>
            <div class="depoimentos-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis lobortis nist ut quis nostrud exercitation ullamco ullamco dolor in he...</p>
                <p class="nome-autor">Lorem ipsum</p>
            </div>
            <div class="depoimentos-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis lobortis nist ut quis nostrud exercitation ullamco ullamco dolor in he...</p>
                <p class="nome-autor">Lorem ipsum</p>
            </div>
        </div>
        <div id="servicos" class="w50 left servicos-container">
            <h2 class="title">Servicos</h2>
            <div class="servicos">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis lobortis nist ut quis nostrud exercitation ullamco ullamco dolor in he</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis lobortis nist ut quis nostrud exercitation ullamco ullamco dolor in he</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis lobortis nist ut quis nostrud exercitation ullamco ullamco dolor in he</li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>