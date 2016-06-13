$(document).ready(function(){
	
	//Modal Close
	$(".knd-modal-close").click( function(e){
		e.preventDefault();

		$(this).closest(".knd-modal").fadeOut();
	});



	//show tab 2
	$(".verify-btn").click(function(e){
		e.preventDefault();

		$(this).closest(".verify-tab").slideUp();
		//$(".verify-3").slideUp();

		$(this).closest(".verify-tab").next(".verify-tab").slideDown();
	})


	var rangeSlider = document.getElementById('slider-range');

	noUiSlider.create(rangeSlider, {
		start: [ 7 ],
		step:1,
		range: {
			'min': [  1 ],
			'max': [ 10 ]
		}
	});

	var rangeSliderValueElement = document.getElementById('slider-range-value');

	rangeSlider.noUiSlider.on('update', function( values, handle ) {
		rangeSliderValueElement.innerHTML = Math.round(values[handle]);

		

		var yourRating = Math.round(values[handle]);
		var avg_rating = Math.round( ( 9 + 7 + 6 + yourRating) / 4 );

		document.getElementById('your-rating').innerHTML = Math.round(values[handle]);
		document.getElementById('avg-rating').innerHTML = avg_rating;



	});

});

