<?php
function myCalculator($num01, $oper, $num02)
{
    $sum = 0;

    if (empty($num01) || empty($num02)) 
    {
        echo "<p style='color: red;'>Bitte geben Sie beide Zahlen ein.</p>";
        return 0;
    } 
    else 
    {
        switch($oper) 
        {
            case "add":
                $sum = $num01 + $num02;
                break;
            
            case "sub":
                $sum = $num01 - $num02;
                break;
            
            default:
                $sum = "Something went wrong.";
                break;
        }
        return $sum;
    }
}

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Value: " . myCalculator($num01, $oper, $num02);

?>
<form action="index.php" method="get">
    <button type="submit" style="margin-top:20px; font-size: 16px">Back</button>
</form>
