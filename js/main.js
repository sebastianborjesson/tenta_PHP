$(function() {

	$(".play").click(function(){
		var playerClass = ($("input[type='radio']:checked").val());
		$.ajax({
			url:"gameplay.php",
			dataType:"json",
			data: {
			playerName: "playerName",
			playerClass: playerClass
			},
			success: function(data){
				console.log("successfully stored character!", data);
			},
			error: function(data) {
				console.log("Hey! Something went wrong here!", data);
			}
		});
	});

	$(".reset").click(function(){
		$.ajax({
			url:"reset.php",
			dataType:"json",
			data: {
				startOver: 1
			},
			success: function(data){
				$(".characterName").val("");
				$("input:radio").attr("checked", false);
				console.log("YAY! you have reset the game!");
			},
			error: function(data) {
				console.log("Hey! You did not reset the game!", data);
			}
		});
	});

});