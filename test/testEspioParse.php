<?php
/**
 * Created by PhpStorm.
 * User: Woohyun
 * Date: 2016-12-16
 * Time: 오후 2:53
 */

date_default_timezone_set('Asia/Seoul');

$return_value["activity"]["year"] = "2016";
$return_value["activity"]["month"] = "12";
$return_value["activity"]["day"] = "16";
$return_value["activity"]["hour"] = "21";
$return_value["activity"]["minute"] = "1";

$DiffTime = "+9 hours";
$combinedString  = $return_value["activity"]["year"] . "-" . $return_value["activity"]["month"]. "-" . $return_value["activity"]["day"] . " " . $return_value["activity"]["hour"].":0:0";
echo (str_replace(".","-",$combinedString));
echo "<br>";
$addTimeForServerDiff = date("d",strtotime($DiffTime, strtotime(str_replace(".","-",$combinedString))));

echo $addTimeForServerDiff;

echo date("H",strtotime($DiffTime, strtotime(str_replace(".","-",$combinedString))));

?>