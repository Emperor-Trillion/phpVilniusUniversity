<?php
$count = 0;
$highest = $highest1 = $highest2 = 0;
if (empty($_POST["variable"])) {
} else {
    $input = $_POST['variable'];
    $number = $input;
    if ($input < 0) {
        echo "Invalid Input! Try Again!";
    } elseif ($input == 1) {
        echo $input;
        echo "<br>";
        echo "Highest Value = $highest";
        echo "<br>";
        echo "Total iteration = $count";
    } else {
        echo "$input \t";
        $highest = $input;
        while ($input != 1) {
            if ($input % 2 == 0) {
                $input = $input / 2;
            } else {
                $input = ((3 * $input) + 1);
            }
            if ($highest > $input) {
            } else {
                $highest = $input;
            }
            echo "$input \t";
            $count = $count + 1;
        }

        echo "<table>";
        echo "<tr>";
        echo "<th scope = 'row'>Number Inputed:</th>";
        echo "<th>";
        echo "<td> $number </td>";
        echo "</th>";
        echo "</tr>";
        echo "<th scope = 'row'>Highest Value:</th>";
        echo "<th>";
        echo "<td> $highest </td>";
        echo "</th>";
        echo "</tr>";
        echo "<th scope = 'row'>Stopping Time:</th>";
        echo "<th>";
        echo "<td> $count </td>";
        echo "</th>";
        echo "</tr>";
        echo "</table>";
    }
}
