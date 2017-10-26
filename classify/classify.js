$(document).ready(function() {
	$('#fileToUpload').bind('change', function (e) {
		var type = ['image/jpeg'];
	    if (!type.includes(this.files[0].type)) {
	    	console.log("wrong type");
	        alert ('Pleass select jpg image');
	        return false;
	    } else {
	        if (this.files[0].size > 2 * Math.pow(10, 6)) {
	            console.log("exceed size");
	            alert ('Pleass select image under 2 Mb');
	            return false;
	        } else {
	        	readURL(this, function(e) {
					$('#avatar').show().attr('src', e.target.result);
				});				
	        }
	    }
	});  

	function readURL(input, onLoadCallback) {
		if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    reader.onload = onLoadCallback;
		    reader.readAsDataURL(input.files[0]);
		}
	} 
});