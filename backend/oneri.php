<?php 

ini_set("memory_limit","120M");

function Donustur($UserTags, $Content){
    $d1 = array();
    $d2 = array();
    
    //echo $UserTags[0];
    if(count($UserTags) > count($Content)){
        //echo "Tamam";
        for($i = 0; $i < $UserTags; $i++){
            //echo $UserTags[0];
            array_push($d1,"a");
            array_push($d2,"b");
        }
    }

    if(count($UserTags) < count($Content)){
        //echo "Tamam";
        for($i = 0; $i < $Content; $i++){
            //echo $UserTags[0];
            array_push($d1,"a");
            array_push($d2,"b");
        }
    }

    if(count($UserTags) == count($Content)){
        //echo "Tamam";
        for($i = 0; $i < $UserTags; $i++){
            //echo $UserTags[0];
            array_push($d1,"a");
            array_push($d2,"b");
        }
    }

    for($i = 0; $i < count($UserTags); $i++){
        for($j=0; $j < count($Content); $i++){
            if($UserTags[i] == $Content[j]){
                $d1[$i] = 1;
                $d2[$j] = 1;
            }
        }
    }

    for($k = 0; $k < count($d1); $k++){
        if(is_string($d1[$k])){
            $d1[$k]=0;
        }
    }

    for($l = 0; $l < count($d2); $l++){
        if(is_string($d2[$l])){
            $d2[$l]=0;
        }
    }

    $converted = array($d1,$d2);
 
    return $converted;
    
}



$a = array("tatil","tarih","fizik");
$b = array("fizik","tarih","tatil");
//$test = Donustur($a, $b);

echo "test";


?>