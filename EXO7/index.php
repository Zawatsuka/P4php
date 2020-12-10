<?php function character($a,$b){
    if($a == "homme" && $b >= 18) {
        echo "Vous etes un ".$a ." et vous avez ".$b." ans donc vous etes majeur"; 
    }
    else if($a == "femme" && $b >= 18) {
        echo "Vous etes une ".$a ." et vous avez ".$b." ans donc vous etes majeur"; 
    }
    else if($a == "homme" && $b < 18) {
        echo "Vous etes un ".$a ." et vous avez ".$b." ans donc vous etes mineur"; 
    }
    else if($a == "femme" && $b < 18) {
        echo "Vous etes une ".$a ." et vous avez ".$b." ans donc vous etes mineur"; 
    }
};
character("femme" , 45);
?>
