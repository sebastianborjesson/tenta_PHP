$(function() {

	$(".play").click(function(){
		var playerName = $('.characterName').val();
		var playerClass = ($("input[type='radio']:checked").val());
		$.ajax({
			url:"gameplay.php",
			dataType:"json",
			data: {
			playerName: playerName,
			playerClass: playerClass
			},
			success: function(data) {
				selectChallenge();
				$(".characterInfo").hide();
				for (var i = 0; i < data.length; i++) {
					for (var j = 0; j < data[i].length; j++) {

						$(".selectNewChallenge").append("<h2>Welcome " + data[i][j].name + " to the game of masters!");
						$(".selectNewChallenge").append("<p>Pick a challenge by accepting or hit pick new challenge if you want to change</p>");
						$(".selectNewChallenge").append("<button class='accept_challenge' type=text>Accept challenge</button>");
						$(".selectNewChallenge").append("<button class='pick_new_challenge' type=text>Pick new challenge");
						
						console.log("YAY! stored in database", data);
					}
				}
			},
			error: function(data) {
				console.log("Hey! Something went wrong here!", data);
			}
		});
	});

	function selectChallenge() {
		
	}

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