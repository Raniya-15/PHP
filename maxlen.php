<?php
function LongWord($str)
 {
    $words = explode(" ", $str);
    $maxLength = 0;
    foreach ($words as $word) 
    {
        if (strlen($word) > $maxLength) 
        {
            $maxLength = strlen($word);
        }
    }
    return $maxLength;
}
$string = "Hi Hello Welcome to php";
echo "The length of the longest word is: " . LongWord($string);
?>
