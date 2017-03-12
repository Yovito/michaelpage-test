<?php

class ClearPar {

  var $open = "(";
  var $close = ")";

  public function build ( $value ){

      $final = "";
      $len = strlen($value) ;

      for ($i=0; $i <= $len-1; $i++) {
        $final .=  $this->isComplete($value[$i],$value[$i + 1]);
      }

      echo $final;

  }


  protected function isComplete( $value, $next_value ) {

  		if ($value === $this->open) {
  			if ($next_value === $this->close) {
  				return $value . $next_value;
  			} else {
  				return null;
  			}
  		} else {
  			return null;
  		}
  	}

}
