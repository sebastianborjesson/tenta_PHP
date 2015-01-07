$(function() {
	var playerClass = console.log($("input[type='radio']:checked").val());
	$(".play").click(function(){
		console.log($("input[type='radio']:checked").val());
		$.ajax({
			url:"gameplay.php",
			dataType:"json",
			data: {
				playerName: "playerName",
				playerClass: playerClass
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