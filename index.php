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

<input type="text" name="replace array" value=" new array replace"><br><br>
  <input type="submit" value="Submit">

<?php  include "sort.php";   ?>

<h2>our array </h2>

 <?php

$a1=array(20,17,12,1,2,3);
$a2=array(25,1,22,8,45,5);


// Example:
$arr = array_replace($a1,$a2);
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
?>



<h2>Bubble sort ascending  array</h2>

<?php
$result = bubbleSort1($arr);
echo'<ul class="pagination">';
foreach ($result as $key => $value) {
    echo'<li>'.  $key  . '</li>' ;
}
  echo'<br/>';
foreach ($result as $key => $value) {
    echo'  <li>'. $value . '</li>' ;
}
  echo'</ul><br/>';
?>

<h2>Bubble sort ascending  array</h2>
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


<h2>Selection sort ascending  array</h2>

<?php
// Example:
$selectionArray = selectionSort($arr);
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

<h2>Shellsort sort sort ascending  array</h2>

<?php
// Example:
$shellArray = shellsort($arr);
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

<h2>New array</h2>

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
?>

<h2>Standard sorting</h2>
<?php
asort($array1);
foreach ($array1 as $key => $value) {
    echo 'position '.  $key . ' contains  value ' . $value . '<br/>';
}

?>

<h2>Natural order sorting</h2>

<?php 
natsort($array1);
foreach ($array1 as $key => $value) {
    echo 'position '.  $key . ' contains  value ' . $value . '<br/>';
}