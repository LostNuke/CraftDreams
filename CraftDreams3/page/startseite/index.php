<script type="text/javascript">
	$.switchSlide = function(index) {
		
	}

	$.startSlider = function() {

		$.ajax({
            type: 'POST',
            url: 'loadres.php',
            data: 'id=testdata',
            dataType: 'json',
            cache: false,
            success: function(result) {
            	alert(result);
            },
        });
		
	}

	$.startSlider2 = function(result) {
		for (var i = 0; i < result.length; i++) {
			var ding = "<img id='" + i + "' src='" + result[i] + "'/>";
			$("#diashow").append(ding);
		}
	}
	
	$(document).ready(function() {
		$.startSlider();
	});
</script>

<div id="startseite">
	<div id="diashow"></div>
</div>