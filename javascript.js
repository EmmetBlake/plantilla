
$(document).ready(function() {
	

	// EL EFECTO DE GALERIA PROVIENE DE AQUI
	
	$(".galeria ul li a").fancybox({
		'transitionIn'	:	'fade',
		'transitionOut'	:	'fade',
		'speedIn'		:	600, 
		'speedOut'		:	600, 
		'autoScale'     :   true,
		'titleShow'     :   true,
		'cyclic'        :   true,
		'titlePosition' :   'inside',
		'overlayShow'	:	false

	}).center();
	
	
});