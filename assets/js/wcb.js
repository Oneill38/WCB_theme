jQuery(document).ready(function(){
	
	// Setup knobs
	jQuery(function() {
        jQuery(".dial").knob();
    });

	// Calculate percentage, set knob
	jQuery(function() {
        var progress = parseInt(jQuery(".income").text());
        var goal = parseInt(jQuery(".goal").text());
        var total = (progress/goal) * 100;
        jQuery(".dial").val(total).trigger('change');
    });




});