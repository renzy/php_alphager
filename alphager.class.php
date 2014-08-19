<?php
class alphager {
	public $base_chars_default = array(
		'a','b','c','d','e','f','g','h','i','j','k','l','m',
		'n','o','p','q','r','s','t','u','v','w','x','y','z'
	);

	public function __construct($base_chars_custom=false){
		$this->chars = ($base_chars_custom) ? $base_chars_custom : $this->base_chars_default;
		$this->base = count($this->chars);
	}

	public function alpha2int($a, $val=0){
		for($x=0; $x < strlen($a); $x++){
			$level = pow($this->base,((strlen($a)-1)-$x));
			$char = array_search(substr($a, $x, 1),$this->chars);
			$val += ($level == 0) ? $char : ($level*$char);
		}
		return($val);
	}

	public function int2alpha($i, $out=''){
		$level = (!is_infinite(log($i))) ? floor(log($i)/log($this->base)) : 0;
		for($x=$level; $x >= 0; $x--){
			$out .= $this->chars[floor($i/pow($this->base,$x))];
			$i = $i%pow($this->base,$x);
		}
		return($out);
	}
}
?>
