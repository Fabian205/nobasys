$(document).ready(function(){
	var imgItems = $('.slider li').length; // Numero de Slides
	var imgPos = 1;

	// Agregando paginacion --
	for(i = 1; i <= imgItems; i++){
		$('.pagination').append('<li><span class="icon-circle-empty"></span></li>');
		
	} 
	// Agregando pause/play_slider for rp
		
	$(".pause").append('<li><span class="icon-pause-circle-o"></span></li>');
	$(".play").append('<li><span class="icon-play-circled2"></span></li>');
	
	//------------------------

	$('.slider li').hide(); // Ocultanos todos los slides
	$('.slider li:first').show(); // Mostramos el primer slide
	$('.pagination li:first').css({'color': '#ce5505'}); // Damos estilos al primer item de la paginacion

	// Ejecutamos todas las funciones
	$('.pagination li').click(pagination);
	$('.pause span').click(stop_Int);
	$('.play span').click(start_Int);
	$('.right span').click(nextSlider);
	$('.left span').click(prevSlider);
	
	//variable intval se inicia como cadena vacia	
	var intval="";
	//se ejecuta function star_Int (automático al cargar la página)
	start_Int();
	
	// FUNCIONES =========================================================	
	
	function start_Int(){
        if(intval==""){
		  $('.pause span').css({'color':'rgba(74,74,74, 0.5)'});	
          intval=setInterval(function(){nextSlider();}, 6000);
		  $('.play span').css({'color':'#ce5505'});
      	}else{
          stop_Int()
      	}
    }
	
	function stop_Int(){
        if(intval!=""){
		  $('.play span').css({'color':'rgba(74,74,74, 0.5)'});	
          clearInterval(intval);
		  $('.pause span').css({'color':'#ce5505'});
          intval="";         
      }
    }
	
	function pagination(){
		var paginationPos = $(this).index() + 1; // Posicion de la paginacion seleccionada

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado

		// Dandole estilos a la paginacion seleccionada
		$('.pagination li').css({'color': 'rgba(74,74,74, 0.5)'});
		$(this).css({'color': '#ce5505'});

		imgPos = paginationPos;
	}

	function nextSlider(){
		if( imgPos >= imgItems){imgPos = 1;} 
		else {imgPos++;}

		$('.pagination li').css({'color': 'rgba(74,74,74, 0.5)'});
		$('.pagination li:nth-child(' + imgPos +')').css({'color': '#ce5505'});

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
	}

	function prevSlider(){
		if( imgPos <= 1){imgPos = imgItems;} 
		else {imgPos--;}

		$('.pagination li').css({'color': 'rgba(74,74,74, 0.5)'});
		$('.pagination li:nth-child(' + imgPos +')').css({'color': '#ce5505'});

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
	}			
});

