<?php

/**
PAPILDOMAS
 7. Parašykite programą, kuri sugeneruotų ornamentą: https://iili.io/H3J974e.png . 
Ornamentas turi būti sugeneruotas naudojant HTML ir PHP. (2 balai)
**/
?>


<!DOCTYPE html>
<html>
<head>
    <style>
        .brown {
            border: solid 1px black;
            background-color: #504545;
            width: 100px;
            height: 100px;
        }

        .white {
            border: solid 1px black;
            background-color: #FFF;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

<table>
    <?php $position = 1; ?>
    <?php for ($i = 1; $i <= 7; $i++): ?>
        <tr>
            <?php for ($j = 1; $j <= 7; $j++): ?>
                <td class="<?= (($j === 1 || $j === 7) && ($i > 6 || $i < 2) || $i === $j && $j > 0 && $j < 7 || ($j === 2 && $i === 6) || ($j === 6 && $i === 2) || ($j === 2 && $i === 6) || ($j === 3 && $i === 5) || ($j === 5 && $i === 3)) ? 'brown' : 'white' ?>"></td>
            <?php endfor; ?>
        </tr>
    <?php endfor ?>
</table>

</body>
</html>