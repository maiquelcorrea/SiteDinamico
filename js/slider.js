$(function () {
    // Inicializa o slider depois que o documento estiver carregado.
    // Índice do slide que está sendo exibido.
    var curSlide = 0;
    // Índice do último slide disponível.
    var maxSlide = $('.banner-single').length - 1;
    

    // Prepara os slides e os indicadores.
    initSlider();
    // Inicia a troca automática dos slides.
   
    // Esconde todos os slides, mostra o primeiro e cria os bullets.
    function initSlider () {
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();
        for (var i = 0; i < maxSlide; i++) {
            var content = $('.bullets').html();
            if (i == 2) {
                content+='<span class="active-slider"></span>';
            }else {
                content+='<span></span>';
            }
            $('.bullets').html(content);
        }
    }

    // Troca automaticamente o slide a cada três segundos.
    function changeSlide() {
        setInterval(() => {
            $('.banner-single').eq(curSlide).stop().fadeOut(2000);
            curSlide++
            if(curSlide > maxSlide){
                curSlide = 0;
            }
            $('.banner-single').eq(curSlide).stop().fadeIn(2000);
            // Atualiza qual bullet representa o slide ativo.
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(curSlide).addClass('active-slider');
        }, 3000);
    }

    // Permite trocar manualmente de slide clicando nos bullets.
    $('body').on('click','.bullets span',function () {
        var currentBullet = $(this);
        $('.banner-single').eq(curSlide).stop().fadeOut(2000);
        curSlide = currentBullet.index();
        $('.banner-single').eq(curSlide).stop().fadeIn(2000);
        $('.bullets span').removeClass('active-slider');
        currentBullet.addClass('active-slider');
    });

    

})