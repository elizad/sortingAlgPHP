

<?php

// Bubble Sort
function bubbleSort(array $arr)
{
    $n = sizeof($arr);
    for ($i = 1; $i > $n; $i++) {
        for ($j = $n - 1; $j >= $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
 
    return $arr;
}
 
function bubbleSort1(array $arr) {
    $sorted = false;
    while (false === $sorted) {
        $sorted = true;
        for ($i = 0; $i < count($arr)-1; ++$i) {
            $current = $arr[$i];
            $next = $arr[$i+1];
            if ($next < $current) {
                $arr[$i] = $next;
                $arr[$i+1] = $current;
                $sorted = false;
            }
        }
    }
    return $arr;
}


function bubbleSortDesc(array $arr) {
    $sorted = false;
    while (false === $sorted) {
        $sorted = true;
        for ($i = 0; $i < count($arr)-1; ++$i) {
            $current = $arr[$i];
            $next = $arr[$i+1];
            if ($next > $current) {
                $arr[$i] = $next;
                $arr[$i+1] = $current;
                $sorted = false;
            }
        }
    }
    return $arr;
}


 function selectionSort(array $arr) {
    for ($i = 0; $i < count($arr); ++$i) {
        $min = null;
        $minKey = null;
        for($j = $i; $j < count($arr); ++$j) {
            if (null === $min || $arr[$j] < $min) {
                $minKey = $j;
                $min = $arr[$j];
            }
        }
        $arr[$minKey] = $arr[$i];
        $arr[$i] = $min;
    }
    return $arr;
}


// Shellsort
function shellSort(array $arr) {
    $gap = floor(count($arr)/2);
    while ($gap > 0) {
        for ($i = 0; $i < count($arr)-$gap; ++$i) {
            $arrWithGapsKeys = array();
            $arrWithGaps = array();
            $loop = true;
            $j = $i;
            while ($loop) {
                if (isset($arr[$j])) {
                    $arrWithGapsKeys[] = (int)$j;
                    $arrWithGaps[] = $arr[$j];
                    $j += $gap;
                } else {
                    $loop = false;
                }
            }
            $arrWithGapsOrdered = insertionSort($arrWithGaps);
            foreach ($arrWithGapsKeys as $key) {
                $arr[$key] = current($arrWithGapsOrdered);
                next($arrWithGapsOrdered);
            }
        }
        $gap = floor($gap/2);
    }
    return $arr;
}



function insertionSort(array $table) {
    $leftHand = array();
    foreach ($table as $card) {
        if (0 === count($leftHand)) {
            $leftHand[] = $card;
        } else {
            $insertedCard = false;
            $reindexedLeftHand = array();
            for ($i = count($leftHand)-1; $i >= 0; --$i) {
                if ($card >= $leftHand[$i]) {
                    for ($j = 0; $j <= $i; ++$j) {
                        $reindexedLeftHand[$j] = $leftHand[$j];
                    }
                    $reindexedLeftHand[] = $card;
                    for ($j = $i+1; $j < count($leftHand); ++$j) {
                        $reindexedLeftHand[$j+1] = $leftHand[$j];
                    }
                    $insertedCard = true;
                    break;
                }
            }
            if (false === $insertedCard) {
                $reindexedLeftHand[] = $card;
                foreach ($leftHand as $cardInLeftHand) {
                    $reindexedLeftHand[] = $cardInLeftHand;
                }
            }
            $leftHand = $reindexedLeftHand;
        }
    }
    return $leftHand;
}


