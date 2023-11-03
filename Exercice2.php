<?php 
function maxProfit($prix) {
   for($i=0;$i<count($prix)-1;$i++){
    $difference=$prix[$i]-$prix[$i+1];
    if($difference<0){
        for($j=0;$j<count($prix)-1;$j++){
            $gain[$j]=$difference;
        }
    }
   }
   if(count($gain)!=0){
    return min($gain);
   }
   else{
    return 0;
   }
}
?>
