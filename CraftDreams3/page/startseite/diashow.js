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
			images = images.split('|');
			$("#images").css("background-image", "url(" + images[0] + ")");
		}
	});
	
	$.timedslide();
}

$.timedslide = function () {
	setInterval(function() {
	    $.diaforward();
	}, 10000);
}

$.diaback = function() {
	if (index != 0) {
		index--;
	} else {
		index = images.length -1;
	}
	$("#images").animate({"background-position-x":"1000pt"}, function() {
		$("#images").css("background-image", "url(" + images[index] + ")");
		$("#images").css("background-position-x", "-1000pt");
		$("#images").animate({"background-position-x":"0pt"});
	});
	
	
	
}

$.diaforward = function() {
	if (index != (images.length -1)) {
		index++;
	} else {
		index = 0;
	}
	$("#images").animate({"background-position-x":"-1000pt"}, function() {
		$("#images").css("background-image", "url(" + images[index] + ")");
		$("#images").css("background-position-x", "1000pt");
		$("#images").animate({"background-position-x":"0pt"});
	});
}

