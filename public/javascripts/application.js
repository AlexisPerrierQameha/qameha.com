var current = 0;
var size = 5;

jQuery(function(){
	jQuery("#previousTestimonial").bind("click", function(e){
		current = current - 1;
		if(current < 0) current = size - 1;
		displayCurrent();
		e.preventDefault();
	});
	jQuery("#nextTestimonial").bind("click", function(e){
		current = (current + 1) % size;
		displayCurrent();
		e.preventDefault();
	});
});

function displayCurrent(){
	jQuery(".quote").hide();
	jQuery("#quote_"+current).show();

	jQuery(".client").hide();
	jQuery("#client_"+current).show();
	
	jQuery("#testimonialsCount").html(current + 1);
}