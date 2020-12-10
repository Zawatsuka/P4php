<?php function number($a , $b){
    if ($a > $b){
        echo "le premier chiffre est plus grand";
    } else if($a < $b){
        echo "le deuxieme chiffre est plus petit";
    }else if($a == $b){
        echo "Ils sont egaux";
    } 
};
number(45 , 45);
?>