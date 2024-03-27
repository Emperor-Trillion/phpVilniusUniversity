<?php
class CollatzProperties
{
    private $lowerBound;
    private $highest;
    private $dataArray;
    function __construct($lowerBound)
    {
        $this->lowerBound = $lowerBound;
    }
    function getValue()
    {
        return $this->lowerBound;
    }
    function generateSequence()
    {
        echo gettype($this->lowerBound);
        echo "<br>";
        $this->dataArray = array();
        array_push($this->dataArray, $this->lowerBound);
        while ($this->lowerBound != 1) {
            if ($this->lowerBound % 2 == 0) {
                $this->lowerBound = $this->lowerBound / 2;
            } else {
                $this->lowerBound = ((3 * $this->lowerBound) + 1);
            }
            array_push($this->dataArray, $this->lowerBound);
            
        }
        return $this->dataArray;
        
    }
    public function getHighestValue($inputArray)
    {
        $this->highest = $inputArray[0];
        for ($i = 1; $i < sizeof($inputArray); $i++) {
            if ($this->highest < $inputArray[$i]) {
                $this->highest = $inputArray[$i];
            }
        }
        return $this->highest;
    }
    function getCount()
    {
        return (sizeof($this->dataArray) - 1);
    }
}
class Additional extends CollatzProperties
{
    private $fullArray;
    private $HighestIterationNumber;
    private $LowestIteratioNumber;
    private $IntArray;
    public function __construct($fullArray)
    {
        $this->fullArray = $fullArray;
    }
    function getFullArray()
    {
        return sizeof($this->fullArray);
    }
    function calcHighestIteration()
    {
        $this->IntArray = array();
        for ($i = 0; $i < sizeof($this->fullArray); $i++) {
            $this->IntArray[$i] = $this->fullArray[$i][2];
        }
        $this->HighestIterationNumber = parent::getHighestValue($this->IntArray);
        return $this->HighestIterationNumber;
    }
    function calcLowestIteration()
    {
        $this->LowestIteratioNumber = $this->IntArray[0];
        for ($i = 1; $i < sizeof($this->IntArray); $i++) {
            if ($this->LowestIteratioNumber > $this->IntArray[$i]) {
                $this->LowestIteratioNumber = $this->IntArray[$i];
            }
        }
        return $this->LowestIteratioNumber;
    }
}

class HistoGRAM extends CollatzProperties
{
    public function Y_Axis_Histogram()
    {
        $height = $this->getCount();
        return $height;
    }
    public function X_Axis_Histogram()
    {
        $width = $this->getlowerBound();
        return $width;
    }
}

class ArithmeticProgression
{
    private $upper;
    private $lower;
    private $difference;
    private $sum = 0;

    public function __construct($lower, $upper, $difference)
    {
        $this->difference = $difference;
        $this->lower = $lower;
        $this->upper = $upper;
    }
    function ArithmeticProgress()
    {
        echo "Arithmetic Sequence: ";
        for ($a = $this->lower; $a <= $this->upper; $a = $a + $this->difference) {
            echo "$a, ";
            $this->sum = $this->sum + $a;
        }
        echo "<br>Sum of Sequence = $this->sum";
    }
}
