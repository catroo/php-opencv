--TEST--
Mat __construct
--SKIPIF--
<?php if (!extension_loaded("opencv")) print "skip"; ?>
--FILE--
<?php
use CV\Mat;
use CV\Scalar;
use const CV\{CV_8UC1, CV_8UC3};
$scalar = new Scalar(255,100,100);
$mat = new Mat(5,5,CV_8UC3,$scalar);
//$mat->rows=10;
var_dump($mat);
$mat->print();
$zeros = Mat::zeros(10,10,CV_8UC1);
var_dump($zeros);
$zeros->print();
?>
--EXPECT--
object(CV\Mat)#2 (3) {
  ["type":"CV\Mat":private]=>
  int(16)
  ["rows"]=>
  int(5)
  ["cols"]=>
  int(5)
}
[[[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]],
 [[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]],
 [[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]],
 [[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]],
 [[255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100], [255, 100, 100]]]
object(CV\Mat)#3 (3) {
  ["type":"CV\Mat":private]=>
  int(0)
  ["rows"]=>
  int(10)
  ["cols"]=>
  int(10)
}
[[  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0],
 [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0]]