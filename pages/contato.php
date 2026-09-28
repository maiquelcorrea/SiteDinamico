<!-- Área onde o Google Maps será criado pelo map.js. -->
<div id="map"></div>
<!-- Formulário de contato enviado pelo JavaScript via AJAX. -->
<div class="contato-container">
    <div class="center">
        <form method="POST" action="">
            <input required type="text" name="nome" placeholder="Nome...">
            <div></div>
            <input required type="text" name="email" placeholder="E-mail...">
            <div></div>
            <input required type="text" name="telefone" placeholder="Telefone...">
            <div></div>
            <textarea required placeholder="Sua mensagem..." name="mensagem" id=""></textarea>
            <div></div>
            <input type="hidden" name="identificador" value="form_contato">
            <input type="submit" name="acao" value="Enviar!">
        </form>
    </div>
</div>