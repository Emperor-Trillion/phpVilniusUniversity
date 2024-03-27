<?php
if (empty($_POST["Variable"])) {
} else {
    $lowerRange = $_POST['Variable'];
    include 'oop.php';
    if ($lowerRange <= 1) {
        echo "Enter a Number greater than 1";
    } else if ($lowerRange >= 1) {
        $stepOne = new CollatzProperties($lowerRange);
        $Table = $stepOne->generateSequence();
        $A = $stepOne->getHighestValue($Table);
        $B = $stepOne->getCount();
        for ($i = 0; $i < sizeof($Table); $i++) {
            echo "<th>";
            echo "<td> $Table[$i],</td>";
            echo "</th>";
            echo "</tr>";
        }
        echo "<table>";
        echo "<th scope = 'row'>Number Inputed:</th>";
        echo "<td> $Table[0]</td>";
        echo "</th>";
        echo "<th></th>";
        echo "<th scope = 'row'>Highest Value:</th>";
        echo "<th>";
        echo "<td> $A </td>";
        echo "</th>";
        echo "<th></th>";
        echo "<th scope = 'row'>Stopping Time:</th>";
        echo "<th>";
        echo "<td> $B </td>";
        echo "</th>";
        echo "</table>";
    }
}
