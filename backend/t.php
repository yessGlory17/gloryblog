<?php 

ini_set("memory_limit","1024M");

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
            if($UserTags[$i] == $Content[$j]){
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



$a = array("tatil","tarih","fizik","teest");
$b = array("fizik","tarih","tatil","fizik");
//$test = Donustur($a, $b);
echo count($a);
echo "------------";
echo count($b);
//$test = Donustur($a,$b);

//print_r($test);


// $hey = "bu bir test metni hadi işini yap işini";
// $test ="test başladı";
// //print_r(array_count_values(str_word_count($hey,1)));


// $words = 'Hello world hello world this is hello world';
// //$words = explode(' ', $words);
// $words = $a;
// $frequency = array();
// foreach($words as $word) {
//     $word = strtolower($word);
//     if(isset($frequency[$word]))
//         $frequency[$word] = 1;
//     else
//         $frequency[$word] = 0;
// }
// echo '<pre>'; print_r($words); echo '</pre>';
// print_r($frequency);


$dizi1 = array("ali","veli","ayşe");
$dizi2 = array("ali","ayşe","mehmet");

$frekans1 = $dizi1;
$frekans2 = $dizi2;
for($i=0; $i < count($dizi1); $i++){

    for($j = 0; $j < count($dizi2); $j++){
        if($dizi1[$i] == $dizi2[$j]){
            //echo $dizi1[$i];
            $frekans1[$i] = 1;
            $frekans2[$j] = 1;
        }

        // if($dizi1[$i] != $dizi2[$j]){
        //     $frekans1[$i] = 0;
        //     $frekans2[$j] = 0;
        // }
    }

    
}



print_r($frekans1);
print_r($frekans2);
?>