$(function() {

	$(".play").click(function(){
		$.ajax({
			url:"gameplay.php",
			dataType:"json",
			data: {
				playerName: "Archer",
				playerClass: "Archer"
			},
			success: function(data) {
				console.log("successfully stored character!", data);
			},
			error: function(data) {
				console.log("Hey! Something went wrong here!", data);
			}
		});
	});
});