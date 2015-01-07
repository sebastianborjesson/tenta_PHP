$(function() {

	$(".play").click(function(){
		$.ajax({
			url:gameplay.php,
			datatype:"json",
			data: {
				playerName: playerName,
				playerClass: playerClass
			},
			success: function(data) {
				console.log("successfully stored character!");
			},
			error: function(data) {
				console.log("Hey! Something went wrong here!");
			}
		});
	});
});