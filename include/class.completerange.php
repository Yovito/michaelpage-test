<?php
/**
 * clas complete range to complete the secuece of an string
 */
class completeRange{

  function build( $value ){
    //$numlist = str_split($value);
    $min = min($value);
    $max = max($value);
    $newList = [];
      for ($i = $min;  $i<=$max; $i++  ){
        $newList = array_push($newList, $i);
      }

        echo implode(",", $newList) . "</br>";
  }
}
