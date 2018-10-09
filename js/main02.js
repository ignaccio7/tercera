$(document).ready(function(){	

	$(".submenu").click(function(e){
	e.preventDefault();		
	if ($(this).hasClass('activado')) {
		$(this).removeClass('activado');
		$(this).children('ul').slideUp();
	}else{
		$('.menu li ul').slideUp();
		$('.menu li').removeClass('activado');
		$(this).addClass('activado');
		$(this).children("ul").slideDown();
	}

	});

	$("ul").click(function(p){
		p.stopPropagation();
	});
	//funciona sin esto pero es por si acaso solo obtiene la direccion el elemento a y envia a la pagina
	$('.menu li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});

	$(window).resize(function(){
		if ($(document).width() > 650) {
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
		}
		if ($(document).width() < 650) {
			$('.menudiv').removeClass('mostrar-nav');
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
		}
	});

	$('.btn-menu').on('click',function(x){
		$('.menudiv').toggleClass('mostrar-nav');
		x.preventDefault();
	});

});