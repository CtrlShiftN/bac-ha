<?php
function dayInMonth($month) {
    $result = "";
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $result = $month. " has 31 days";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $result = $month. " has 30 days";
            break;
        case 2:
            $result = $month." has 28-29 days";
            break;
        default:
            $result = "Invalid month";
            break;
    }
    var_dump($result);
    return $result;
}
dayInMonth(2);
function dayInMonth2($month) {
    $dayInMonth = [31, " 28-29 days", 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    return $dayInMonth[$month-1];
}
var_dump(dayInMonth2(2));
?>