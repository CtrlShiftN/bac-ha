<?php
$string = 'Write a function countWords($str) that takes any string of characters and finds the number of times each string occurs.';

function countWordOccurrence($str) {
    // split string into array
    $wordArr = explode(" ", $str);
    // declare result array
    $result = [];
    // loop through array
    foreach ($wordArr as $word) {
        // check if word is already in result array
        if (array_key_exists($word, $result)) {
            // if word is already in result array, increment its count
            $result[$word]++;
        }else {
            // if word is not in result array, add it with a count of 1
            $result[$word] = 1;
        }
    }
    // var_dump($result);
    return $result;
}
countWordOccurrence($string);
?>