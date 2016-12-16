<?php
/**
 * Created by PhpStorm.
 * User: Woohyun
 * Date: 2016-12-16
 * Time: 오후 2:01
 */


date_default_timezone_set('Asia/Seoul');

$report["datetime"] = "2016.12.16 00:20:08";
//str_replace(".","-",$report["datetime"])
$DiffTime = "+9 hours";
$addTimeForServerDiff = date("Y.m.d H:i:s",strtotime($DiffTime, strtotime(str_replace(".","-",$report["datetime"]))));

echo $addTimeForServerDiff;
echo "<br>";
echo str_replace(".","-",$report["datetime"]);






?>