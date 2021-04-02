<?php
    /**
     * This function is use for divide the string to array of words.
     */
    function lookupWords($str){
        $words = [];
        $text="";
        $txt = trim($str ," ")." ";
        for($j=0 ; $j<strlen($txt) ; $j++){
            if($txt[$j] === " "){
                array_push($words,$text);
                $text= "";
            }else{
                $text .=  $txt[$j];
            }
        }
        return $words;
    }
    /**
     * This function is use for reverse each words in array that we divide.
     */
    function reverse ($text){

        $arrWord = lookupWords($text);
		$reText ="";
        for($k= 0 ; $k <count($arrWord) ; $k++){
            $num = strlen($arrWord[$k]);
            for($i=$num-1 ; $i>=0 ; $i--){
                $reText .=  $arrWord[$k][$i];
            }
            $reText .=" ";
        }
		
		echo $reText;
	}
    
?>

<h1><?php reverse("emocleW ot PHP")?></h1>
