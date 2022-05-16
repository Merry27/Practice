 
 <?php
 echo "<h4> PHP EXERCISE # 2 : </>";
 echo "<br></>";

class exercise2{
 	public $string;
 	public $arg1;
 	public $arge2;

 	function set_reverse_string($string){
 		$this->string = strrev($string); 
 		echo "<br> String: $string  </>";
		echo "<br> Answer:  </>";
 		echo $this->string;
 	}
 	function check_is_lowercase($string){ 
 		echo "<br> String: $string  </>";
		echo "<br> Answer:  </>";
 		if($this->string = $string  ===  strtolower($string)){

		echo 'String is all lowercase';
		} else {
	        echo "The string $this->string does not consist of all lowercase ";
	    }
 	}
 	function return_Sum_of_two_arg($arg1,$arg2){
 		echo "<br> Arguments value: $arg1 and $arg2  </>";
		echo "<br> Answer:  </>";
 		$this->x = $arg1 + $arg2; 
	 echo $this->x; 
 	}
 	function replace_surename($string){
 		echo "<br> String: $string  </>";
		echo "<br> Answer:  </>";
	$this->string = str_replace("Andales","Hurdman",$string);
 		echo $this->string;
 	}
 	 
}


$exercise = new exercise2();
$reverse_string =$exercise->set_reverse_string("Heal the world!");
echo "<br></>"; 
$check_string =$exercise->check_is_lowercase("heal the world!");
echo "<br></>"; 
$sum_of_two =$exercise->return_Sum_of_two_arg(5,12); 
echo "<br></>"; 
$replacesurname =$exercise->replace_surename("Merryjoy Andales");

 
?>