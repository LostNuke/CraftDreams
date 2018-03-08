var images = 0;
var index = 0;

$.startSlider = function() {
	
	var folder = "../../img/diashow/";
	
	$.ajax({
		url : folder,
		success: function (data) {
			
			$(data).find("a").attr("href", function (i, val) {
	            if( val.match(/\.(jpe?g|png|gif)$/) ) { 
	                if (images == 0) {
	                	images = folder + val;
	                } else {
	                	images += "|" + folder + val;
	                }
	            } 
	        });
			alert(images);
			images = images.split('|');
			$("#images").css("background-image", "url(" + images[0] + ")");
		}
	});
}

$.diaback = function() {
	if (index != 0) {
		index--;
	} else {
		index = images.length -1;
	}
	$("#images").animate("background-image", "url(" + images[index] + ")");
}

$.diaforward = function() {
	if (index != (images.length -1)) {
		index++;
	} else {
		index = 0;
	}
	$("#images").animate("background-image", "url(" + images[index] + ")");
}

