<?php
include 'function2.php';
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>COLLATZ CONJECTURE</title>
</head>

<body>
    <h1 align='center'>COLLATZ CONJECTURE OR "3X + 1" PROBLEM</h1>
    <h3 align='center'> By Sunday Emmanuel Sanni</h3>
    <hr />
    <div align='center'>
        <h2 align='center'> SINGLE INPUT</h2>
        <form method="POST" action="./collatzConjecture.php">
            <input type="number" name="variable" placeholder="Non-Zero Positive Value" />
            <button>Generate Sequence</button>
        </form>
        <?php
        include 'singleProgram.php';
        ?>
    </div>
    <hr />
    <div align='center'>
        <h2 align='center'>RANGE OF VALUES</h2>
        <form method="POST" action="./collatzConjecture.php">
            <input type="number" name="lowerBound" placeholder="Minimum Number" />
            <input type="number" name="upperBound" placeholder="Maximum Number" />
            <button>Show Results</button>
        </form>
        <?php
        if (empty($_POST["lowerBound"]) || empty($_POST["upperBound"])) {
        } elseif (($_POST["lowerBound"] < 0) || ($_POST["upperBound"] < 0)) {
            echo "Invalid Input! Try Again!";
        } else {

            $result = rangeOperation($_POST["lowerBound"], $_POST["upperBound"]);
            if ($result == NULL) {
            } else {
                $countMin = $countMax = 0;

                echo "<table border = '1'>";
                echo "<tr>";
                echo "<th scope='col'>Number</th>";
                echo "<th scope='col'>Highest <br>Value</th>";
                echo "<th scope='col'>Stopping <br>Time</th>";
                echo "</tr>";
                for ($x = 0; $x < count($result); $x++) {
                    echo "<tr>";
                    for ($y = 0; $y < 3; $y++) {
                        echo "<td align='center'>";
                        if ($y == 0) {
                            echo $result[$x][$y];
                        } elseif ($y == 1) {
                            echo $result[$x][$y];
                        } else {
                            echo $result[$x][$y];
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                for ($x = 0; $x < count($result); $x++) {
                    if ($x == 0) {
                        $countMin = $result[0][2];
                        $countMax = $result[0][2];
                    }
                    if ($countMin > $result[$x][2]) {
                        $countMin = $result[$x][2];
                    }
                    if ($countMax < $result[$x][2]) {
                        $countMax = $result[$x][2];
                    }
                }
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
                for ($x = 0; $x < count($result); $x++) {
                    if ($result[$x][2] == $countMin) {
                        echo "<tr>";
                        echo "<td align='center'>";
                        echo $result[$x][0];
                        echo "</td>";
                        echo "<td align='center'>";
                        echo $result[$x][1];
                        echo "</td>";
                        echo "<td align='center'>";
                        echo $result[$x][2];
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
                for ($x = 0; $x < count($result); $x++) {
                    if ($result[$x][2] == $countMax) {
                        echo "<tr>";
                        echo "<td align='center'>";
                        echo $result[$x][0];
                        echo "</td>";
                        echo "<td align='center'>";
                        echo $result[$x][1];
                        echo "</td>";
                        echo "<td align='center'>";
                        echo $result[$x][2];
                        echo "</td>";
                        echo "</tr";
                        echo "<br>";
                        break;
                    }
                }
                echo "</table>";
            }
        }
        ?>
    </div>
</body>

</html>