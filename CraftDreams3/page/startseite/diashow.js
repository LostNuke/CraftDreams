var images = 0;
var index = 0;
var interval;
var imgdiv;
var adiv;
var folder = "../../img/diashow/";

$loadSliderComponents = function() {
	imgdiv = $("#startseite #images");
	adiv = $("#startseite a");
	
	imgdiv.mouseover(function() {
		adiv.css("display", "flex");
	});
	adiv.mouseover(function() {
		adiv.css("display", "flex");
	});
	
	adiv.mouseleave(function() {
		adiv.css("display", "none");
	});
	imgdiv.mouseleave(function() {
		adiv.css("display", "none");
	});
	
	var togglesliders = false;;
	imgdiv.click(function() {
		if (!togglesliders) {
			adiv.css("display", "flex");
			togglesliders = true;
		} else {
			adiv.css("display", "none");
			togglesliders = false;
		}
	});
}

$.startSlider = function() {
	clearInterval(interval);
	
	images = 0;
	index = 0;
	
	$loadSliderComponents();
	
	$.ajax({
		url: folder,
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
			
			imgdiv.css("background-image", "url(" + images[0] + ")");
			
			$.timedslide();
		},
		error: function() {
			alert("ERROR 1004 - Contact Server Administrator");
		}
	});
}

$.timedslide = function () {
	interval = setInterval(function() {
	    $.forward();
	}, 10000);
}

$.diaback = function() {
	clearInterval(interval);
	$.back();
	$.timedslide();
}

$.diaforward = function() {
	clearInterval(interval);
	$.forward();
	$.timedslide();
}

$.back = function() {
	if (index != 0) {
		index--;
	} else {
		index = images.length -1;
	}
	
	imgdiv.animate({"background-position-x":"1000pt"}, function() {
		imgdiv.css("background-image", "url(" + images[index] + ")");
		imgdiv.css("background-position-x", "-1000pt");
		imgdiv.animate({"background-position-x":"0pt"});
	});
}

$.forward = function() {
	if (index != (images.length -1)) {
		index++;
	} else {
		index = 0;
	}
	
	imgdiv.animate({"background-position-x":"-1000pt"}, function() {
		imgdiv.css("background-image", "url(" + images[index] + ")");
		imgdiv.css("background-position-x", "1000pt");
		imgdiv.animate({"background-position-x":"0pt"});
	});
}
