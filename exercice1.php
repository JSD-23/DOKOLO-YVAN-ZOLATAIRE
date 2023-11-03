<?php
function lengthOfLastWord($s) {
    if(empty($s)){
        return 0;
    }
    else{
        $tableau=explode(' ',$s);
    $dernier=count($tableau);
    $taille=strlen($tableau[$dernier-1]);
    return $taille;
    }
   
}
?>
