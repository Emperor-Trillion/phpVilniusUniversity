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
        <form method="POST" action="./collatzConjectureII.php">
            <input type="number" name="Variable" placeholder="Number Greater than 1" />
            <button>Generate Sequence</button>
        </form>
        <?php
        include 'singleProgramII.php';
        ?>
    </div>
    <hr />
    <div align='center'>
        <h2 align='center'>RANGE OF VALUES</h2>
        <form method="POST" action="./collatzConjectureII.php">
            <input type="number" name="lowerBound" placeholder="Minimum Number" />
            <input type="number" name="upperBound" placeholder="Maximum Number" />
            <button>Show Results</button>
        </form>
        <?php
        include 'function2II.php';
        ?>
    </div>
    <hr />
    <div align='center'>
        <h2 align='center'>ARITHMETIC PROGRESSION</h2>
        <form method="POST" action="./collatzConjectureII.php">
            <input type="number" name="lower" placeholder="Minimum Number" />
            <input type="number" name="upper" placeholder="Maximum Number" />
            <input type="number" name="difference" placeholder="Common Difference" />
            <button>Show Results</button>
        </form>
        <?php
        include 'arithmeticprogression.php';
        ?>
    </div>
</body>

</html>