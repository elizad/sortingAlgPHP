<!DOCTYPE html>
<html>
<head>
    <title>
    PhP sort 
    </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


<?php  include "sort.php";   ?>


<h2>Bubble sort </h2>
<p> It is one algorithm used to sot a sequence of number. The scales at the right end of the sequence will compare the numbers on their left and right sides. If the number on the right is found to be smaller,the numners will be swapped. </br>

 <?php
// Example:
$arr = array(25,1,22,8,45,5);
echo("our array ");
//print_r($arr);
  echo'<ul class="pagination">';
foreach ($arr as $key => $value) {
    echo'<li>'.  $key  . '</li>' ;
}
  echo'<br/>';
foreach ($arr as $key => $value) {
    echo'  <li>'. $value . '</li>' ;
}
  echo'</ul><br/>';






$result = bubbleSort1($arr);
echo("our bubbleSort ascending  array ");
echo'<ul class="pagination">';
foreach ($result as $key => $value) {
    echo'<li>'.  $key  . '</li>' ;
}
  echo'<br/>';
foreach ($result as $key => $value) {
    echo'  <li>'. $value . '</li>' ;
}
  echo'</ul><br/>';
?></p>
<p>  buuble sort descending </p>

<?php 
$sortedArr = bubbleSortDesc($arr);
  echo'<ul class="pagination">';
foreach ($sortedArr as $key => $value) {
    echo'<li>'.  $key  . '</li>' ;
}
  echo'<br/>';
foreach ($sortedArr as $key => $value) {
    echo'  <li>'. $value . '</li>' ;
}
  echo'</ul><br/>';
?>
</p>


<?php
// Example:
$selectionArray = selectionSort($arr);
echo "selection sort ";
  echo'<ul class="pagination">';
foreach ($selectionArray as $key => $value) {
    echo'<li>'.  $key  . '</li>' ;
}
  echo'<br/>';
foreach ($selectionArray as $key => $value) {
    echo'  <li>'. $value . '</li>' ;
}
  echo'</ul><br/>';

//print_r($selectionArray);

?>

<?php
// Example:
$shellArray = shellsort($arr);
echo "shellsort sort ";
//print_r($shellArray);

  echo'<ul class="pagination">';
foreach ($shellArray as $key => $value) {
    echo'<li>'.  $key  . '</li>' ;
}
  echo'<br/>';
foreach ($shellArray as $key => $value) {
    echo'  <li>'. $value . '</li>' ;
}
  echo'</ul><br/>';

?>


<?php

$array1  = array("12", "10", "2", "1");
echo'<ul class="pagination">';
foreach ($array1 as $key => $value) {
    echo'<li>'.  $key  . '</li>' ;
}
  echo'<br/>';
foreach ($array1 as $key => $value) {
    echo'  <li>'. $value . '</li>' ;
}
  echo'</ul><br/>';


echo "Standard sorting\n";
asort($array1);
foreach ($array1 as $key => $value) {
    echo 'position '.  $key . ' contains  value ' . $value . '<br/>';
}


echo "\nNatural order sorting\n";
natsort($array1);
foreach ($array1 as $key => $value) {
    echo 'position '.  $key . ' contains  value ' . $value . '<br/>';
}