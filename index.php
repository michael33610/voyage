<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 12/05/17
 * Time: 14:20
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'TimeTravel.php';


$start= new DateTime("2008/03/12 15:30");
$end= new DateTime("1985/12/31 18:30");
$voyage=new TimeTravel($start,$end);
echo "duree voyage ".$voyage->getTravelInfo()."<br>";
//version avec stamp
echo" findDate -10000000000    ".$voyage->findDate(-1000000000);

/*
$interval=-1000000000;
echo 'Date a trouver : '.$voyage->findDate($interval)->format('d/m/Y H:i:s').'<br>';
*/

echo "<br>back to futur<br>";;
$step="P1M1W";
echo "start =".$start->format("Y/m/d")."<br>";
echo "end =".$end->format("Y/m/d");
$periode = $voyage->backToFutureStepByStep($step);
foreach ($periode as $date) {
  echo '<br>'.$date->format('M d Y A g:i').'<br>';
;
}
