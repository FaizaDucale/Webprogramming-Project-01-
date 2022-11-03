<?php

function buildBoard($answered, $categories){
  
  echo "<div class= 'category'>";
  foreach($categories as $c){
        echo "<div class = 'CategoryTile'>".$c."</div>";
      }
  echo "</div>";  
  echo "<div class = 'board'>";
  
  foreach($answered as $answer){
      echo "<div class='newRow'>";      
      foreach($answer as $answer=>$boolAns){
        if($boolAns == true){
          echo "<input class = 'QuestionTile' type='submit' name = 'Question' value = '".$answer."'>";
        }else{
          echo "<input class = 'QuestionTile' type='button' name='EmptyTile' style = 'font-size: 100pt;'>";
        }
      }
      echo "</div>";
    }
  echo "</div>";
}


function saveUser($uName, $pWord, $Name){
  if(isset($uName) && isset($pWord) && isset($Name)){
			$inString = "\r\n".$uName.",". $pWord.",". $Name;
			$fp = fopen('registerinfo.txt', 'a');
			fwrite($fp, $inString);
      fclose($fp);
		}
}


function getQuestion($question){
  $file = explode(";", file_get_contents("Questions.txt"));
  $currentQuestion = "";
  foreach($file as $f){
    $currentQ = explode(",", $f);
    if($currentQ[1] == $question){
      $currentQuestion = $currentQ[3];
      break;
    }
  }
  return $currentQuestion;
}
function getAnswer($question){
  $file = explode(";", file_get_contents("Questions.txt"));
  $currentAnswer = "";
  foreach($file as $f){
    $currentQ = explode(",", $f);
    if($currentQ[1] == $question){
      $currentAnswer = $currentQ[4];
      break;
    }
  }
  return $currentAnswer;
}

function checkAnswer($answer){
  $file = explode(";", file_get_contents("Questions.txt"));
  $currentAnswer = false;
  $currentQuestion = "";
  foreach($file as $f){
    $currentQ = explode(",", $f);
    if($currentQ[4] == $answer){
      $currentQuestion = $currentQ[1];
      $currentAnswer = true;
      break;
    }
  }
  return $currentAnswer;
}

function setScore($question, $score, $answer){
  if($answer == true){
  return $score + getScore($question);
  }else{
  return $score - getScore($question);
  }
}

function getScore($question){
  $file = explode(";", file_get_contents("Questions.txt"));
  $currentScore = 0;
  foreach($file as $f){
    $currentQ = explode(",", $f);
    if($currentQ[1] == $question){
      $currentScore = (int)$currentQ[2];
      break;
    }
  }

  return $currentScore;
}
function viewedQuestions($question, $viewed){
  $index = 0;
  $size = sizeof($viewed);
  for($i = 0; $i < $size; $i++){
    if(array_key_exists($question, $viewed[$i])){
      $index = $i;
    }
  }
  $viewed[$index][$question] = false;

  return $viewed;
}
  function openQuestion($question){
    $gQuestion = getQuestion($question);
    $gAnswer = getAnswer($question);
    $gScore = getScore($question);
    $Combo = $gQuestion.",".$gAnswer.",".$gScore;
    $array = explode(",", $Combo);
    echo $array[0];
                    
  }


function checkIsSet($globals){
  $question = "";
  foreach($globals as $global=>$val){
    if(isset($global)){
      $question = $val;
    }
  }
  return $question;
}
function isBoardCleared($open){
  $isEmpty = True;
  foreach($open as $o){
    foreach($o as $check => $val){
    if($val == true){
      $isEmpty = false;
    }
  }
}
  return $isEmpty;
}
function updateLeaderBoard($player, $score){
  if(isset($player)){
    $inString = "\r\n".$player.",".$score.";";
    $fp = fopen('leaderboard.txt', 'a');
    fwrite($fp, $inString);
    fclose($fp);
  }
}
function readLeaderBoard(){
  $lboard = explode(";", file_get_contents("leaderboard.txt"));
  echo"<p>LeaderBoard</p><hr>";
  foreach($lboard as $board){
    echo "</br>".$board;      
  }
}
                   
?>
