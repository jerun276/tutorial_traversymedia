<?php
# CONDITIONALS

/*
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

$num = '5';

if ($num == 5) {
    echo '5 passed';
}

if ($num === 5) {
    echo '5 passed';
}

if ($num == 5) {
    echo '5 passed';
} else {
    echo 'did not pass';
}

if ($num == 5) {
    echo '5 passed';
} else if ($num == 6) {
    echo '6 passed';
} else {
    echo 'did not pass';
}

# NESTING IF
$num = 6;
if ($num > 4) {
    if ($num < 10) {
        echo "$num passed";
    }
}

/*
    LOGICAL OPERATORS

    and &&
    or  ||
    xor
*/

if ($num > 4 or $num < 10) {
    echo "$num passed";
}

# SWITCH

$favColor = 'red';

switch ($favColor) {
    case 'red':
        echo 'Your favourite color is red';
        break;
    case 'blue':
        echo 'Your favourite color is blue';
        break;
    case 'green':
        echo 'Your favourite color is green';
        break;
    default:
        echo 'Your favourite is something else';
}
