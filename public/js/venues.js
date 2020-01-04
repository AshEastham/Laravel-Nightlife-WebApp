$(document).ready(function() {

	// STAGE GRID FADE
	$(".stage").mouseenter(function() {
	  var desc = $(".stage-desc", this);
	  var title = $(".stage-name", this);
	  $("img", this).stop().fadeTo(300, 0.1);
	  title.stop().fadeOut(200, "swing", function() {
	    desc.stop().fadeIn(100, "swing");
	  });
	}).mouseleave(function() {
	  var desc = $(".stage-desc", this);
	  var title = $(".stage-name", this);
	  $("img", this).stop().fadeTo(300, 0.8);
	  desc.stop().fadeOut(200, "swing", function() {
	    title.stop().fadeIn(100, "swing");
	  });
	});

});
