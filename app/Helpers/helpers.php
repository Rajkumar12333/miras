<?php
if (!function_exists('IND_money_format')) {
    function IND_money_format($number) {
        // Function implementation to format the number
        $explrestunits = "" ;
        $number = preg_replace('/,+/', '', $number);
        $words = explode(".", $number);
        $des = "00";
        if(count($words) <= 2){
            $number = $words[0];
            if(count($words)>= 2){ $des = $words[1];}
            if(strlen($des) < 2){$des = "$des"."0";}else{$des = substr($des,0,2);}
        }
        if(strlen($number) > 3) {
            $lastthree = substr($number, strlen($number)-3, strlen($number));
            $restunits = substr($number, 0, strlen($number)-3); 
            $restunits = (strlen($restunits) % 2 == 1)? "0".$restunits : $restunits; 
            $expunit = str_split($restunits, 2);
            for($i=0; $i < sizeof($expunit); $i++) {
                if($i==0)
                {
                    $explrestunits .= (int)$expunit[$i].",";
                } else {
                    $explrestunits .= $expunit[$i].",";
                }
            }
            $thecash = $explrestunits.$lastthree;
        } else {
            $thecash = $number;
        }
        return $thecash.".".$des;
    }
}
