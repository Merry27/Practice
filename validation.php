<?php
class validation{
    
    function check_id($ID){ 
        if($ID == ''){
            echo "Error ! Empty ID";
        }
        if(is_numeric($ID) == false){
            echo "Error ! invalid ID";
        }
    }
    function check_name($name){ 
        if($name == ''){
            echo "Error ! Empty ID";
        }
        if(strlen($name) == 100){
            echo "Error ! invalid name";
        }
    }
    function check_bday($bday){ 
        if($bday == ''){
            echo "Error ! Empty birthday";
        }
         
    }
    function check_gender($gender){ 
        if(strtolower($gender) <> 'male'){
            echo "Error ! invalid gender";
        }
        if(strtolower($gender) <> 'female'){
            echo "Error ! invalid gender";
        }
         
    }
    function check_number($number){ 
        if($number == ''){
            echo "Error ! Empty number";
        } 
    }
}   

?>