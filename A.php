<html>
<style>
    .bar {
        width: 25px;
        height: 100px;
        display: inline-block;
        background-color: yellow;
        border: 1px solid green;
    }
</style>

<head><!-- Include D3.js from a CDN -->
    <script src="https://d3js.org/d3.v7.min.js"></script>


</head>

<body>
    <h1 style='text-align:center'>COLLATZ CONJECTURE OR "3X + 1" PROBLEM</h1>
    <h3 style='text-align:center'> By Sunday Emmanuel Sanni</h3>
    <hr />
    <div style='margin: 0px auto 0px auto; width: 200px;'>
        <h2 style='text-align:center'> SINGLE INPUT</h2>
        <form method="POST" action="./A.php" style="display: flex; flex-direction:column;align-items:center; row-gap: 10px">
            <input type="number" name="Variable" placeholder="Number Greater than 1" />
            <button>Generate Sequence</button>
        </form>
        <?php
        include 'singleProgramII.php';
        ?>
    </div>
    <hr />
    <div style='margin: 0px auto 0px auto; width: 500px'>
        <h2 style='text-align:center'>RANGE OF VALUES</h2>
        <form method="POST" action="./A.php" style="display: flex; flex-direction:row;align-items:center; row-gap: 10px; flex-wrap:  wrap">
            <input type="number" name="lowerBound" placeholder="Minimum Number" />
            <input type="number" name="upperBound" placeholder="Maximum Number" />
            <button>Show Results</button></br>

            <label for="histogam" style="font-weight: bold; color: red;flex-grow:1; display: flex; flex-direction:column; align-items: center;">
                <div style="width: 150px"><input type="checkbox" id="histogam" name="histogram" value="true"> Show Histogram</div>
            </label><br>
        </form>
        <?php
        include "./function2II.php";
        ?>
    </div>
    <hr />
    <div id="histogram"></div>
    <?php if (!empty($_POST['histogram']) && (!empty($_POST['lowerBound']) && !empty($_POST['upperBound']))) : ?>

        <script>
            let countTable = <?php echo json_encode($countTable); ?>;
            let numberTable = <?php echo json_encode($numberTable); ?>;
            const dataset = [];

            numberTable.forEach((elem, i) => {
                numberTable[i] = parseInt(numberTable[i]);
                countTable[i] = parseInt(countTable[i]);
                dataset.push([numberTable[i], countTable[i]])
            });


            const h = 300;
            const w = 500;
            const p = 30;

            const xScale = d3.scaleLinear()
                .domain([d3.min(dataset, (d) => d[0]), d3.max(dataset, (d) => d[0]) + 1])
                .range([p, w - p])

            const yScale = d3.scaleLinear()
                .domain([0, d3.max(dataset, (d) => d[1])])
                .range([h - p, p])


            const svg = d3.select("#histogram")
                .append("svg")
                .attr("width", w)
                .attr("height", h)
                .style("box-shadow", "0px 0px 10px gray")
                .selectAll("rect")
                .data(dataset)
                .enter()
                .append("rect")
                .attr("width", (w - 2 * p) / dataset.length)
                .attr("height", (d) => h - p - yScale(d[1]))
                .attr("x", (d, i) => xScale(d[0]))
                .attr("y", (d) => yScale(d[1]));

            const xAxis = d3.axisBottom(xScale);
            svg.append("g")
                .attr("transform", `translate(0,${h-p})`)
                .call(xAxis);

            // const yAxis = d3.axisLeft(yScale);
            // svg.append("g")
            //     .attr("transform", `translate(${p}, 0)`)
            //     .call(yAxis);
        </script>
        <br>
        <hr />
    <?php endif; ?>
    <div style='margin: 0px auto 0px auto; width: 600px'>
        <h2 style='text-align:center'>ARITHMETIC PROGRESSION</h2>
        <form method="POST" action="./A.php" style="display: flex; flex-direction:row;align-items:center; row-gap: 10px;  flex-wrap: wrap">
            <input type="number" name="lower" placeholder="Minimum Number" />
            <input type="number" name="upper" placeholder="Maximum Number" />
            <input type="number" name="difference" placeholder="Common Difference" />
            <div style="font-weight: bold; color: red;flex-grow:1; display: flex; flex-direction:column; align-items: center;"><button>Show Results</button></div>
        </form>
        <?php
        include 'arithmeticprogression.php';
        ?>
    </div>
</body>

</html>