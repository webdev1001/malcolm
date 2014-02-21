jQuery(document).ready(function($) {
 
  $("#menu-header-navigation").before('<div id="header-menu-icon"></div>');
  	$("#header-menu-icon").click(function() {
		$("#menu-header-navigation").slideToggle();
	});
	
  $("#menu-primary-navigation").before('<div id="primary-menu-icon"></div>');
	$("#primary-menu-icon").click(function() {
		$(".menu-primary").slideToggle();
	});
	
  $("#menu-secondary-navigation").before('<div id="secondary-menu-icon"></div>');
  	$("#secondary-menu-icon").click(function() {
		$(".menu-secondary").slideToggle();
	});
	
	$(window).resize(function(){
		if(window.innerWidth > 768) {
			$("#menu-header-navigation").removeAttr("style");
			$(".menu-primary").removeAttr("style");
			$(".menu-secondary").removeAttr("style");
		}
	});
	
});