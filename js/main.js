$(".submenu").click(function(e){
	$(this).children("ul").slideToggle();
	e.preventDefault();
})

$("ul").click(function(p){
	p.stopPropagation();
})