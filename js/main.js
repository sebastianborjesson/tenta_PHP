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

	/*
	function resetGame() {
		$.ajax({
			url: "reset.php",
			dataType: "json",
			data: {
				startOver: 1
			},
			success: createCharacter,
			error: function(data){
				console.log("HEY! Did not reset the game: ", data)
			}
		});
	}
	*/
});