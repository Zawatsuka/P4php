<?php function character($a,$b){
    $response ='';
    if($a == "homme" && $b >= 19) {
        $response = "Vous etes un ".$a ." et vous avez ".$b." ans donc vous etes majeur"; 
    }
    else if($a == "femme" && $b >= 19) {
        $response = "Vous etes une ".$a ." et vous avez ".$b." ans donc vous etes majeure"; 
    }
    else if($a == "homme" && $b == 18){
        $response = "Bravo Timothée tu es enfin majeur ! let's go boire a fond et jouer aux jeux à gratter";
    }
    else if($a == "femme" && $b == 18) {
        $response = "Bravo Micheline tu es enfin majeure ! let's go boire a fond et jouer aux jeux à gratter"; 
    }
    else if($a == "homme" && $b < 18) {
        $response = "Vous etes un ".$a ." et vous avez ".$b." ans donc vous etes mineur"; 
    }
    else if($a == "femme" && $b < 18) {
        $response = "Vous etes une ".$a ." et vous avez ".$b." ans donc vous etes mineure"; 
    }else{
        $response = "nani !?";
    }
    return $response;
};
echo character("femme" , 12);
?>
