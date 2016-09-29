<!-- codeup.dev/coding_challenge.php -->
<?php 


// Problem 1
echo 'PROBLEM 1 *****************' . PHP_EOL;

function isPerfect($int)
{
    for ($i = $int; $i >= 1; $i--) {
        if ($int / $i == $i && $i%1 == 0) {
            return 'True'; 
        } 
    }
    return 'False';
}

echo isPerfect(27) . PHP_EOL;
echo isPerfect(100) . PHP_EOL;

// Problem 2
echo 'PROBLEM 2 *****************' . PHP_EOL;


// Need to trim off last comma
function capitalPos($string)
{
    $string = str_split($string);
    print_r($string);
    foreach ($string as $index => $letter) {
        if (strtoupper($letter) === $letter) 
            echo $index . ',';
    }
}


capitalPos('WorlD');



// // Problem 3
echo 'PROBLEM 3 *****************' . PHP_EOL;

function milesToKilo($mpg) 
{
    $kpg = $mpg * 1.60934;
    $kpl = $kpg / 3.78541;
    echo $kpl . PHP_EOL;
    echo number_format((float)$kpl, 2, '.', '') . PHP_EOL;
}

milesToKilo(13);


// Problem 4
echo 'PROBLEM 4 *****************' . PHP_EOL;

function validPin($pin)
{
    if (strlen($pin) != 4 && strlen($pin) != 6) {
        echo 'False' . PHP_EOL;
        return false;
    }
    $pinArray = str_split($pin);


    var_dump($pinArray);
    foreach ($pinArray as $char) {
        if (is_numeric($char) != 1) { 
            echo 'False' . PHP_EOL;
            return false;
        }
    }
            echo 'True' . PHP_EOL;
            return true;
}

validPin('827109');
validPin('123d');

// Problem 5
echo 'PROBLEM 5 *****************' . PHP_EOL;

function anagram($ana)
{
    $anaWords = explode(',', $ana);

    $anaWords[0] = trim($anaWords[0]);
    $ana1 = str_split($anaWords[0]);

    $anaWords[1] = trim($anaWords[1]);
    $ana2 = str_split($anaWords[1]);
    var_dump($anaWords);
    var_dump($ana1);
    var_dump($ana2);

    foreach($ana1 as $ana1Char) {
        foreach($ana2 as $ana2Char) {
            if ($ana2Char == $ana1Char) {
                unset($ana1Char);
            }
        }
    }


}

anagram('hello, me');

