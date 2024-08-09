<?php
$word = "";

function isPalindrome($word)
{
    $result = true;
    $word = strtolower(trim($word));
    // var_dump($word);

    if (strlen($word) > 1) {
        $left = 0;
        $word = str_split($word);
        $right = count($word);

        while ($left < $right) {
            // compare
            if ($word[$left] != $word[$right - 1]) {
                $result = false;
                break;
            }
            // next pair
            $left++;
            $right--;
        }
    }
    return $result;
}
var_dump(isPalindrome("22"));
