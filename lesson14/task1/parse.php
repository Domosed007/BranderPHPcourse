<?php
class Parse{
    static function replacingLettersSingString(string $str):string{
        $arr=explode(' ',$str);

        $newStr='';

        foreach($arr as $word){
            if(strlen($word)>6) $newStr.=self::replacingLettersSingWord($word);
            else $newStr.="$word ";
        }

        return $newStr;
    }

    private static function replacingLettersSingWord(string $str):string{
        
        $result=mb_strimwidth($str,0,7,'*');    
        
        return $result.' ';
    }
}

echo Parse::replacingLettersSingString('я купив бронетранспортер вчора');