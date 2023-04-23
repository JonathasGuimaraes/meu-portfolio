$(document). ready(function(){

  $('#menu').click(function(){
    $(this).toggleClass('fa-times');
    $('header').toggleClass('toggle');
  });
  
  $(window).on(scroll(), function(){
    $('#menu').removeClass('fa-times');
    $('header').removeClass('toggle');
  });
  
  if ($(window).scrollTop() > 0){
    $('#top').show();
  } else {
    $('#top').hide();
  }
  
  $('a[href*="#"]').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top,
    }, 500, 'linear');
  });

});

		$( document).getElementById('form');
		$(document).getElementById('box');
		
	
		
		
	//Adiciona um evento de clique a cada item do contato
	bntEnviar.forEach(function(box) {
			box.addEventListener('click', function() {
				// Realize a ação desejada quando o item do contato for selecionado
			alert('Você selecionou o item: ' + item.textContent);
		});
		});
//});



















/*$(document).ready(function(){
  $('#menu').click(function(){
    $(this).alternarClass('fa-times');
    $('header').alternarClass('alternar');
  });
  $(window).on('scroll load', function(){
    $('#menu').removeClass('fa-times');
    $('header').removeClass('alternar');
  });
    if($(window) . scrollTop()>0){
      $('top'). show();
    }else{
      $('top').hide();
    };
  $('a[href*="#"]').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top,
    },
    500,
    'linear'
    );
  });
  });*/
