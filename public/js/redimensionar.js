jQuery(document).ready(function($){

  // Aplica a altura toda vez que a janela for redimensionada 
  $(window).resize(function(event){

    // Altura da Janela
    var windowHeight = $(window).height();
    
    // Altura do Cabeçalho (com margins e paddings)
    var headerHeight = $('nav').outerHeight(true, true);
    
    // Altura do Rodapé (com margins e paddings)
    var footerHeight = $('footer').outerHeight(true, true);
    
    // Altura mínima calculada
    var contentHeight = Math.floor(windowHeight - headerHeight - footerHeight);
    
    // Aplica a altura mínima necessária para que o footer encoste na parte
    // inferior da janela
    $('section').css('min-height', contentHeight);
  
  }).resize(); // Executa o evento uma vez para que seja aplicada as correções

});