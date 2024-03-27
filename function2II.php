<?php
if (empty($_POST["lowerBound"]) || empty($_POST["upperBound"])) {
} elseif ($_POST["lowerBound"] < 1 || $_POST["upperBound"] < 1) {
    echo "Negative Numbers Not Allowed!";
} elseif ($_POST["lowerBound"] > $_POST["upperBound"]) {
    echo "Upper Bound Number must be Greater than Lower Bound Number!";
} elseif ($_POST["lowerBound"] == $_POST["upperBound"]) {
    echo "Same Number as a range Not Allowed!";
} else {
    $lowerRange = $_POST['lowerBound'];
    $upperRange = $_POST['upperBound'];
    include 'oop.php';
    if ($lowerRange >= 1 && $upperRange > 1) {
        $fullTable = array();
        for ($i = $lowerRange; $i <= $upperRange; $i++) {
            $stepOne = new CollatzProperties($i);
            $Table = $stepOne->generateSequence();
            $A = $stepOne->getHighestValue($Table);
            $B = $stepOne->getCount();
            array_push($fullTable, array($i, $A, $B));
        }
        $stepTwo = new Additional($fullTable);
        $C = $stepTwo->calcHighestIteration();
        $D = $stepTwo->calcLowestIteration();
        echo "<table border = '1'>";
        echo "<tr>";
        echo "<th scope='col'>Number</th>";
        echo "<th scope='col'>Highest <br>Value</th>";
        echo "<th scope='col'>Stopping <br>Time</th>";
        echo "</tr>";
        for ($x = 0; $x < sizeof($fullTable); $x++) {
            echo "<tr>";
            for ($y = 0; $y < 3; $y++) {
                echo "<td align='center'>";
                echo $fullTable[$x][$y];
            }
            echo "</td>";
        }
        echo "</tr>";
        echo "</table>";

        echo "<table border = '1'>";
        echo "<tr>";
        echo "<th scope='col' colspan='3'>MINIMUM STOPPING TIME</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th scope='col'>Number</th>";
        echo "<th scope='col'>Highest <br>Value</th>";
        echo "<th scope='col'>Stopping <br>Time</th>";
        echo "</tr>";
        echo "<br>";
        for ($x = 0; $x < sizeof($fullTable); $x++) {
            if ($fullTable[$x][2] == $D) {
                echo "<tr>";
                echo "<td align='center'>";
                echo $fullTable[$x][0];
                echo "</td>";
                echo "<td align='center'>";
                echo $fullTable[$x][1];
                echo "</td>";
                echo "<td align='center'>";
                echo $fullTable[$x][2];
                echo "</td>";
                echo "</tr";
                echo "<br>";
                break;
            }
        }
        echo "</table>";
        echo "<br>";
        echo "<table border = '1'>";
        echo "<tr>";
        echo "<th scope='col' colspan='3'>MAXIMUM STOPPING TIME</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th scope='col'>Number</th>";
        echo "<th scope='col'>Highest <br>Value</th>";
        echo "<th scope='col'>Stopping <br>Time</th>";
        echo "</tr>";
        for ($x = 0; $x < sizeof($fullTable); $x++) {
            if ($fullTable[$x][2] == $C) {
                echo "<tr>";
                echo "<td align='center'>";
                echo $fullTable[$x][0];
                echo "</td>";
                echo "<td align='center'>";
                echo $fullTable[$x][1];
                echo "</td>";
                echo "<td align='center'>";
                echo $fullTable[$x][2];
                echo "</td>";
                echo "</tr";
                echo "<br>";
                break;
            }
        }
        echo "</table>";
    }
}
