<?php function number($a , $b){
    if ($a > $b){
        $response =  $a ." est plus grand";
    } else if($a < $b){
        $response =  $b ." est plus petit";
    }else{
        $response = $a ." et ". $b." sont egaux";
    } 
    return $response;
};
echo number(4 , 3);
?>