 
 <?php
 echo "<h4> PHP EXERCISE : </>";
 echo "<br></>";
  //1. Write a function to reverse a string (you can use php built-in functions)
  
 function reverse_string(){
 	$string = "Heal the world!";
 	echo "	1. Write a function to reverse a string (you can use php built-in functions)";
 	echo "<br> String: $string  </>";
 	echo "<br> Answer:  </>";
 	echo strrev($string);
 	echo "<br></>";
 }
reverse_string();

// 2.Write a function to check if a string is all lowercase (you can use php built-in functions)

function check_is_lowercase(){ 
	$string = "heal the world!";
	echo "	2.Write a function to check if a string is all lowercase (you can use php built-in functions)";
	echo "<br> String: $string  </>";
 	echo "<br> Answer:  </>";
	if($string ===  strtolower($string)){

	echo $string.' is all lowercase';
	} else {
        echo "The string $string does not consist of all lowercase ";
    }
 	echo "<br></>";
 }
check_is_lowercase();

//3. Write a function that will accept two arguments and return the sum of two arguments 
function return_Sum_of_two_arg($arg1,$arg2){
	echo "3. Write a function that will accept two arguments and return the sum of two arguments ";
	echo "<br> Arguments value: $arg1 and $arg2  </>";
 	echo "<br> Answer:  </>";
	 $x = $arg1 + $arg2;
	 echo  $x; 
 	echo "<br></>";
 	
 }
return_Sum_of_two_arg(5,10);
//4. Write a function that will accept your full name and replace your sure name with Hurdman
function replace_surename($string){
 	  echo "4. Write a function that will accept your full name and replace your sure name with Hurdman";
 	  echo "<br> String: $string  </>";
 	echo "<br> Answer:  </>";
 	echo str_replace("Andales","Hurdman",$string);
 	echo "<br></>";
 }
replace_surename("Merryjoy Andales");

?>