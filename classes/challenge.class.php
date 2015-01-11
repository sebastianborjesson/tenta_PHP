<?php

class Challenge extends Base {
  public $description;
  public $skills;
  
  public function __construct($description,$skills){
    $this->description = $description;
    $this->skills = $skills;
  }

    public function howGoodAMatch($person){
    //total points a person has
    $sum= 0;
    //total points possible for this challenge
    $max = 0;

    //calculate how good of a match a person is to this challenge
    foreach($this->skills as $skill => $points){
      //by checking how many skillpoints the challenge requires
      $needed = $points;
      //and by checking how many skillpoints a person has
      $has = $person->{$skill.'Skill'}; //grillSkill

      //check if a person has any tools
      if (count($person->tools) > 0) {
        //if they do, go through them
        for ($i = 0; $i < count($person->tools); $i++) {
          //and for each skill the tool has
          foreach ($person->tools[$i]->skills as $toolSkill => $value) {
            //if a toolSkill matches the skill we are currently calculating
            if ($toolSkill == $skill) {
              //add the toolSkill points 
              $has += $value;
            }
          }
        } 
      }

      //if a person has more points than needed, only count the points needed (to preserve our percentage)
      //else count the skillpoints a person has
      $sum += $has > $needed ? $needed : $has;
      $max += $needed;
    }

    //return the percentage of skill points they have
    return $sum/$max;
  }

  public function winChances($persons){
    $matches = array();
    //count is used to create a range of win intervals for all persons
    $count = 0;
    //calculate chance to win using howGoodAMatch()
    foreach($persons as $person){
      $howGoodAMatch = $this->howGoodAMatch($person);
      //and store result in matches
      $matches[] = array(
        "person" => $person,
        "howGoodAMatch" => $howGoodAMatch,
      );
      //increase count to create an interval
      $count += $howGoodAMatch;
    }
    //also create a percentage to be nice (better to count with)
    foreach($matches as &$match){
      $match["winChancePercent"] = round(100*($match["howGoodAMatch"]/$count));
    }
    //return win chances
    return $matches;
  }

  public function playChallenge($persons){
    //get chances to win for each person
    $matches = $this->winChances($persons);
    //once again we are using intervals to check for a winner
    $count = 0;
    //pick a random number (between 0 and 100 since we are using percent)
    $rand = rand(0,100);
    
    //then check which person interval contains the random number
    foreach($matches as $match){
      if(
        $rand >= $count && 
        $rand <= $match["winChancePercent"] + $count
      ){
        //if a persons interval contains the random number
        // we have a winner, end function using return
        return $match["person"];
      } else {
        //if not a winner, find out how close to winning they were
      }
      //if this person was not a winner, increase interval and try again...
      $count += $match["winChancePercent"];
    }
  }
}