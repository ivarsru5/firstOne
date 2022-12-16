<?php
$num01 = $_GET["num1"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

function myCauculator($num01, $oper, $num02){
 $sum;
  switch($oper){
    case "add":
        $sum = $num01 + $num02;
        break;
    case "sub":
        $sum = $num01 - $num02;
        break;
    default:
    $sum = "There was an error!";
    break;
  }
  return $sum;
}
echo "Value: " . myCauculator($num01, $oper, $num02)
?>