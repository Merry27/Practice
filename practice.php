<?php
    $arrays = array(1,3,2,4);

    $lenght = count($arrays);
    echo "Before Sort"."<br>";

    for($i=0;$i<$lenght;$i++){
        echo $arrays[$i]."<br>";
    }

    echo "after Sort"."<br>";

    sort($arrays); 

    for($ii=0;$ii<$lenght;$ii++){s
        print_r( $arrays[$ii] . "<br>");
    }

?>


<?php
    class MyAccess {
        var $var = "This is first var";
        protected $fist_name;
        // simple class method
        function returnVar() {
            echo $this->fist_name;
        }
        function set_fist_name($set_this){
            $this->fist_name = $set_this;
        }
    }
    class child extends MyAccess {
        function setVal($set_this){
            $this->fist_name = $set_this;
        }
        function getVal(){
            echo $this->fist_name;
        } 
    }

    $obj1 = new MyAccess();
    $obj1->set_fist_name("Meri Joi");
    $obj1->returnVar();
?>
  