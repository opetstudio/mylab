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
		$twoOrder= 0;
		if($from < 0 && $to < 0)
		  throw new Exception("Number must gt 0!");
		for($i = $from;$i<=$to;$i++){
		if($i%3==0){
			echo " Fizz ";
			$twoOrder++;
		}
		elseif($i%5==0){
			echo " Buzz ";
			$twoOrder++;
		}
		else{
			if($twoOrder == 2){
				echo " Bazz " ;
			}
			else{echo " $i " ;}
			$twoOrder=0;
		}
	}
	return true;
	}
}
?>