<?php

    $lines = file("questions.txt", FILE_IGNORE_NEW_LINES);
    $questionPool=array();
    $category=0;
    $index=0;

    foreach($lines as $line){
        if($line!=""){
            $questionPool[$category][$index]=$line;
            $index++;
        }
        else{
            $category++;
            $index=0;
            continue;
        }
    }
    
    $usedCats=array();
    while(sizeof($usedCats)!=5){
        $rand=rand(0,(sizeof($questionPool)-1));
        if(in_array($rand, $usedCats))
            continue;
        else
            array_push($usedCats, $rand);
    }

    $questions=array(
        array($questionPool[$usedCats[0]][0],$questionPool[$usedCats[0]][1],$questionPool[$usedCats[0]][2],$questionPool[$usedCats[0]][3],$questionPool[$usedCats[0]][4],$questionPool[$usedCats[0]][5]),
        array($questionPool[$usedCats[1]][0],$questionPool[$usedCats[1]][1],$questionPool[$usedCats[1]][2],$questionPool[$usedCats[1]][3],$questionPool[$usedCats[1]][4],$questionPool[$usedCats[1]][5]),
        array($questionPool[$usedCats[2]][0],$questionPool[$usedCats[2]][1],$questionPool[$usedCats[2]][2],$questionPool[$usedCats[2]][3],$questionPool[$usedCats[2]][4],$questionPool[$usedCats[2]][5]),
        array($questionPool[$usedCats[3]][0],$questionPool[$usedCats[3]][1],$questionPool[$usedCats[3]][2],$questionPool[$usedCats[3]][3],$questionPool[$usedCats[3]][4],$questionPool[$usedCats[3]][5]),
        array($questionPool[$usedCats[4]][0],$questionPool[$usedCats[4]][1],$questionPool[$usedCats[4]][2],$questionPool[$usedCats[4]][3],$questionPool[$usedCats[4]][4],$questionPool[$usedCats[4]][5]),
        
    );

    $answered=array(
        array(0,0,0,0,0,0),
        array(0,0,0,0,0,0),
        array(0,0,0,0,0,0),
        array(0,0,0,0,0,0),
        array(0,0,0,0,0,0),
    );

    session_start(); 
    $_SESSION["questions"] = $questions; 
    $_SESSION["answered"] = $answered; 

    header("Location: board.php");

    
?>
