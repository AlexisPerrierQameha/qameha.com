var current = 0;
var size = 1;

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
        $date.html(data[0].created_at.replace("+0000 2010",""))
      }
      );
		
  // The info is here : http://twitter.com/statuses/user_timeline/qameha.json?count=1
  }
}
function initCaroussel(){
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
}

function displayCurrent(){
  jQuery(".quote").hide();
  jQuery("#quote_"+current).show();

  jQuery(".client").hide();
  jQuery("#client_"+current).show();
	
  jQuery("#testimonialsCount").html(current + 1);
}