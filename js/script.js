$(function () {
  // Executa o código somente depois que a página estiver carregada.
  // aqui vai todo o codigo de js/jquery
  // Abre ou fecha o menu mobile quando o usuário clica na navegação.
  $("nav.mobile").click(function () {
    // oque vai acontecer quando clicar na nav do mobile
    // Seleciona a lista de links que será aberta ou fechada.
    var listaMenu = $("nav.mobile ul");
    // abrir menu atraves do fadein
    /* if (listaMenu.is(':hidden') == true) {
            listaMenu.fadeIn();
        } else {
            listaMenu.fadeOut();
        } */

    // brir/fechar sem efeitos
    /* if (listaMenu.is(':hidden') == true) {
            listaMenu.show();
        } else {
            listaMenu.hide();
        } */

    // Abre/fecha o menu e troca o ícone entre barras e X.
    if (listaMenu.is(":hidden") == true) {
      // Localiza o ícone atual para alterar sua classe.
      var icone = $(".menu-mobile").find("i");
      icone.removeClass("fa-bars");
      icone.addClass("fa-xmark");
      listaMenu.slideToggle();
    } else {
      listaMenu.slideToggle();
      var icone = $(".menu-mobile").find("i");
      icone.removeClass("fa-xmark");
      icone.addClass("fa-bars");
    }
  });

  if ($("target").length > 0) {
    // o elemento existe, portanto precisamos dar o scroll em algum elemento
    var elemento = "#" + $("target").attr("target");
    var divScroll = $(elemento).offset().top;
    $("html,body").animate({ scrollTop: divScroll }, 2000);
  }

  // Ativa o carregamento dinâmico das páginas marcadas com 'realtime'.
  carregarDinamico();
  // Carrega uma página dentro do container sem recarregar o site inteiro.
  function carregarDinamico () {

    $('[realtime]').click(function() {
      var pagina = $(this).attr('realtime');

      $('.container-principal').load('/webCompleto/projects/projeto_01/pages/'+pagina+'.php');
      return false;
    });

  }
});
