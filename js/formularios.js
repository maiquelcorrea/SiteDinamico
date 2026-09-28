$(function(){
    // Aguarda o carregamento do documento antes de registrar os eventos.
    
    // Intercepta o envio dos formulários para usar AJAX.
    $('body').on('submit','form',function(){
        // Guarda o formulário que disparou o evento.
        var form = $(this);
        // Envia os dados para o PHP sem recarregar a página.
        $.ajax({
            // Mostra o carregamento enquanto a requisição está sendo enviada.
            beforeSend:function(){
                $('.overlay-loading').fadeIn();
            },
            // Arquivo PHP que processa os dados e envia o e-mail.
            url:include_path+'ajax/formularios.php',
            method:'post',
            dataType:'json',
            // Converte os campos do formulário para os dados da requisição.
            data:form.serialize()
        // Executado quando o servidor retorna uma resposta.
        }).done(function(data) {
            // Exibe a mensagem de sucesso quando o PHP retornar sucesso.
            if(data.sucesso) {
                $('.overlay-loading').fadeOut();
                $('.sucesso').fadeIn();
                setTimeout(function(){
                    $('.sucesso').fadeOut();
                },3000)
            }else{
                $('.overlay-loading').fadeOut();
            }
            // Exibe a mensagem de erro quando o PHP informar uma falha.
            if(data.erro) {
                $('.overlay-loading').fadeOut();
                $('.erro').fadeIn();
                setTimeout(function(){
                    $('.erro').fadeOut();
                },3000)
            }else {
                $('.overlay-loading').fadeOut();
            }
        });
        
        // Impede o envio tradicional e evita o recarregamento da página.
        return false;
    })
})