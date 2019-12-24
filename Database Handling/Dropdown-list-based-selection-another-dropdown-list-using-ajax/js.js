$(document).ready(function() {
	$("#country").change(function() {
		var country_id = $(this).val();
		if(country_id != "") {
			$.ajax({
				url:"get-states.php",
				data:{c_id:country_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#state").html(resp);
				}
			});
		} else {
			$("#state").html("<option value=''>------- Select --------</option>");
		}
	});
});
