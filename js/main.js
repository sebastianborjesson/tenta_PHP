$(function() {

	$(".play").click(function(){
		var playerName = $('.characterName').val();
		var playerClass = ($("input[type='radio']:checked").val());
		$.ajax({
			url:"start_game.php",
			dataType:"json",
			data: {
				playerName: playerName,
				playerClass: playerClass
			},
			success: function(data) {

				$(".characterInfo").hide();
				for (var i = 0; i < data.length; i++) {
					for (var j = 0; j < data[i].length; j++) {


						$(".selectNewChallenge").append("<h2>Welcome " + data[i][j].name + " to the game of masters!");
						$(".selectNewChallenge").append("<p>Pick a challenge by accepting or hit pick new challenge if you want to change</p>");
						$(".selectNewChallenge").append("<button class='accept_challenge'>Accept challenge</button>");
						$(".selectNewChallenge").append("<button class='pick_new_challenge'>Pick new challenge");

						$(".pick_new_challenge").on("click", pickNewChallenge);
						$(".accept_challenge").on("click", acceptChallenge);
						console.log("YAY! stored in database", data);
					}
				}
			},
			error: function(data) {
				console.log("Hey! Something went wrong here!", data);
			}
		});
	});

		function acceptChallenge() {
			
		}

		function pickNewChallenge() {

			$.ajax({
				url: "get_challenges.php",
				dataType: "json",
				data: {
					latestChallenge: 1
				},
				success: function(data) {
					$(".random").html("");
					$(".selectNewChallenge").append("<p class='random'>" + data.description + "</p>");
					
					$(".selectNewChallenge").append("<p class='random'>Strength: " + data.skills.strength + "</p>");
					$(".selectNewChallenge").append("<p class='random'>Agility: " + data.skills.agility + "</p>");
					$(".selectNewChallenge").append("<p class='random'>Swordfighting: " + data.skills.swordfighting + "</p>");
					$(".selectNewChallenge").append("<p class='random'>Archery: " + data.skills.archery + "</p>");
					$(".selectNewChallenge").append("<p class='random'>Axefighting: " + data.skills.axefighting + "</p>");
					$(".selectNewChallenge").append("<p class='random'>Defense: " + data.skills.defense + "</p>");
				},
				error: function(data) {
					console.log("It didnt work!", data.responseText);
				}
		
			});
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