<?php

$datepicker = $_POST['datepicker'];
$depositAmount = $_POST['depositAmount'];
$depositAmountNew = preg_replace("/[^0-9]/", "", $depositAmount);
$period = $_POST['period'];
$depositReplenishmentAmount = $_POST['DepositReplenishmentAmount'];
$depositReplenishmentAmountNew = preg_replace("/[^0-9]/", "", $depositReplenishmentAmount);
$percent = 10;
$days = 365;
list($day, $month, $year) = explode(".", $datepicker);
// $dayNew = cal_days_in_month(CAL_GREGORIAN, $month, $year);
// $periodNew = $dayNew - $day;

$summadd = $_POST['choice'];

if ($summadd == 'Yes' && $depositReplenishmentAmountNew != null) {
  $result = $depositAmountNew * pow(1 + $percent / 100 / $days, $days * $period) + $depositReplenishmentAmountNew * 12 * $period * (pow(1 + $percent / 100 / $days, $days * $period) - 1) / $percent / 100 * $days + $depositReplenishmentAmountNew * 12 * $period;
} else {
  $result = $depositAmountNew * pow(1 + ($percent / 100) / $days, $days * $period);
}
echo number_format($result, 0, ' ', ' ') , ' руб.';

?>