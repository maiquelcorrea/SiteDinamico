$(function(){
    // Executa o código depois que o painel estiver carregado.

    // Controla se o menu lateral está aberto ou fechado.
    var open = true;
    // Obtém a largura atual da janela.
    var windowSize = $(window)[0].innerWidth;

    // Define o tamanho do menu conforme a largura da tela.
    var targetSizeMenu = (windowSize <= 400) ? 200 : 300;

    // Em telas menores, o menu começa fechado para liberar espaço.
    if(windowSize <= 768){
        $('.menu').css('width',0).css('padding',0);
        open = false;
    }

    // Alterna o menu lateral ao clicar no botão.
    $('.menu-btn').click(function () { 
        if(open){
            // O menu está aberto, então vamos fechá-lo.
            $('.menu').animate({'width':0, 'padding':0}, function() {
                open = false;
            });
            $('.content, header').css({'width':'100%'});
            $('.content, header').animate({'left':0}, function() {
                open = false;
            });

        }else{
            // O menu está fechado, então vamos abri-lo.
            $('.menu').css('display','block');
            $('.menu').animate({'width':targetSizeMenu+'px', 'padding':'10px'}, function() {
                open = true;
            });
            $('.content, header').css({'width':'calc(100% - 300px)'});
            $('.content, header').animate({'left':targetSizeMenu+'px'}, function() {
                open = true;
            });
        }
    });

    $(window).resize(function () {
        windowSize = $(window)[0].innerWidth;
        if(windowSize <= 768){
            $('.menu').css('width','0').css('padding','0');
            $('.content, header').css('width','100%').css('left','0');
            open = false;
        }else {
            open = true;
            $('.content, header').css('width','calc(100% - 250px)').css('left','250px');
            $('.menu').css('width','250px').css('padding','10px 0');
        }
    })

    
})