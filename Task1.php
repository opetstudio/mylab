<?php
class Task1
{	
	public function fizzBuzz($from=0,$to=0){
		if($from < 0 && $to < 0)
		  throw new Exception("Number must gt 0!");
		for($i = $from;$i<=$to;$i++){
			if($i%3==0) echo " Fizz ";
			elseif($i%5==0) echo " Buzz ";
			else echo " $i " ;
		}
		return true;
	}
	public function fizzBuzzBazz($from=0,$to=0){
	}
}
?>