<?php

/*
 Užduotis nuo 1 iki 4 atlikite galite į vieną failą, rekomenduojame 5, 6, 7 užduotis atlikti atskiruose failuose. 
 Funkcijų ir kintamųjų pavadinimus vadinkite suprantamai,
 taip kad kiti galėtu suprasti ką funkicija daro ar kintamasis saugo (vertinime atsižvelgsime į teisingus namingus)
 Pabandykite laikykis code standartų, tiek kiek esame apie juos šnekėje.
 */

/*
 1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
*/
echo 'uzduotis 1' . PHP_EOL;

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function exercises1(array $array): int
{
    function evenNumbers($number) {
        return $number % 2 === 0;
    }
    return array_sum(array_filter($array, 'evenNumbers'));
}

echo exercises1($numbers) . PHP_EOL;


echo 'uzduotis 2' . PHP_EOL;
/*
 2. Grąžinkite visų skaičių, esančių $numbers2 masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
*/

$numbers2 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];

function exercises2(array $array): int
{
    return array_reduce($array, function (int $carry, array $newArray) {
        foreach ($newArray as $number)
        $carry *= $number;
        return $carry;
        },
        1);
}

print_r(exercises2($numbers2) . PHP_EOL);


echo 'uzduotis 3' . PHP_EOL;
/*
 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
 Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
 Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
*/

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function exercises3(array $array): void
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i]['price'] !== null) {
            echo 'Destination "' . $array[$i]['destination'] . '".' . PHP_EOL;
            echo 'Title: "' . $array[$i]['title'] . '"' . PHP_EOL;
            echo 'Total: ' . ($array[$i]['price'] * ($array[$i]['tourists'])) . PHP_EOL;
            echo '************' . PHP_EOL;
        }
    }
}

exercises3($holidays);


/*
 4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
*/
echo 'uzduotis 4' . PHP_EOL;

function exercises4(array $array): void
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i]['price'] !== null) {
            $fileResource = fopen('text.txt', 'a');
            $firstRow = 'Destination "' . $array[$i]['destination'] . '".' . PHP_EOL;
            $secondRow = 'Title: "' . $array[$i]['title'] . '"' . PHP_EOL;
            $thirdRow = 'Total: ' . ($array[$i]['price'] * ($array[$i]['tourists'])) . PHP_EOL;
            $fourthRow = '************' . PHP_EOL;
            $allRows = $firstRow . $secondRow . $thirdRow . $fourthRow;
            fwrite($fileResource, $allRows . PHP_EOL);
            fclose($fileResource);
        }
    }
}

exercises4($holidays);