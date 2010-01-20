var current = 0;
// NUMBER OF QUOTES TO BE DISPLAYED
var size = 3;

jQuery(function(){
  initTwitter();
  initCaroussel();
});

function initTwitter(){
  if( jQuery("#twitter").length > 0){
    $date = jQuery("#twitterDate");
    $content = jQuery("#twitterContent");
		
		$.getJSON("http://twitter.com/statuses/user_timeline/qameha.json?count=1&callback=?",
		    function(data){
				$content.html(data[0].text);
				$date.html(data[0].created_at.replace("+0000 2010",""));
        	}
		);
	}
}
function initCaroussel(){
	jQuery("#testimonialsTotal").html(size);
	jQuery("#previousTestimonial").bind("click", function(e){
		current = current - 1;
		if(current < 0) current = size - 1;
		displayCurrent("previous");
		e.preventDefault();
	});
	jQuery("#nextTestimonial").bind("click", function(e){
		current = (current + 1) % size;
		displayCurrent("next");
		e.preventDefault();
	});
	if(size < 2){
		jQuery("#caroussel").hide();
	}
}

function displayCurrent(direction){

	if(direction=="next"){
		jQuery(".quote:visible").hide("slide", { direction: "right" }, 100);
		setTimeout('jQuery("#quote_"+current).show("slide", { direction: "left" }, 100);', 100);
        jQuery(".client:visible").hide("slide", { direction: "right" }, 100);
        setTimeout('jQuery("#client_"+current).show("slide", { direction: "left" }, 100);', 100);
	}else{
		jQuery(".quote:visible").hide("slide", { direction: "left" }, 100);
		setTimeout('jQuery("#quote_"+current).show("slide", { direction: "right" }, 100);', 100);
    	jQuery(".client:visible").hide("slide", { direction: "left" }, 100);
        setTimeout('jQuery("#client_"+current).show("slide", { direction: "right" }, 100);', 100);
	}
	
//	jQuery(".client:visible").fadeOut(1000);
//	setTimeout('jQuery("#client_"+current).fadeIn(1000);', 1000);
	

  	jQuery("#testimonialsCount").html(current + 1);
}