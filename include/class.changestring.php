<?php
/*********************************************************************
    class.changestring.php
**********************************************************************/

class ChangeString {

	var  $alpha = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

	public function build( $thisString ){

		 $new_string = str_split($thisString);

		 foreach ($new_string as $index=>$value ){
				$newalpha = $this->is_alpha($thisString[$index]);
				if($newalpha){
					$result = $newalpha;
				}else{
					$result = $thisString[$index];
				}
		 echo $result;
		}
	}

	function is_alpha( $value ){

		$letter = array_search($value, $this->alpha);
		if (!is_bool($letter)) {
				if($letter==26)$letter=-1;
				$value = $this->alpha[$letter+1];
				return $value;
		} else {
			return false;
		}

	}

}
