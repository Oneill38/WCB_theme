jQuery(document).ready(function(){
	
	// Setup knobs
	jQuery(function() {
        jQuery(".dial").knob();
    });

	// Calculate percentage, set knob
	jQuery(function() {
        var progress = parseFloat(jQuery(".income").text().replace('$', '').replace(',', ''), 10);
        var goal = parseFloat(jQuery(".goal-text").text().replace('$', '').replace(',', ''), 10);
        var total = (progress/goal) * 100;
        jQuery(".dial").val(total).trigger('change');
    });



});