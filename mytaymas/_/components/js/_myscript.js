$(function() {
	
   //activate schedule tabs
	var hash = window.location.hash;
	hash && $('ul.nav a[href="' + hash + '"]').tab('show');

	

	$("#home a:contains('Home')").parent().addClass('active');
	$("#schedule a:contains('Schedule')").parent().addClass('active');
	$("#artists a:contains('Artists')").parent().addClass('active');
	$("#venuetravel a:contains('Venue/Travel')").parent().addClass('active');
	$("#register a:contains('Register')").parent().addClass('active');
   
   // tooltip
    $("[data-toggle='tooltip']").tooltip({ animation: true});
  
 
	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover

	// show modals
	$('.modalphotos img').click(function (){
       $('#modal').modal({show:true});
       var mysrc=this.src.substr(0,this.src.length-7) +'.jpg';
       $('#modalimage').attr('src',mysrc);
       $('#modalimage').click(function (){
         $('#modal').modal('hide');
       });
	});	

}); //jQuery is loaded