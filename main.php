
<?php include ('validation.php');  ?>
<html>
    <body>
        <div id="wrapper">

            <?php
                //Open the file.
                $fileHandle = fopen("writers.csv", "r");
                $csv = array_map("str_getcsv", file("writers.csv",FILE_SKIP_EMPTY_LINES));
                $keys = array_shift($csv);
                //Loop through the CSV rows. 
                  //Print out my column data.
                   // HTML tag for placing in row format
                $checker = new validation();
                
                $dataArray = array();
                foreach ($csv as $i=>$row) {
                    
                    // $checkID =  $checker->check_id($row[0]);
                    // $checkname =  $checker->check_name($row[1]);
                    // $checkbday =  $checker->check_bday($row[2]);
                    // $checkgender =  $checker->check_gender($row[3]);
                    //  $checknumber =  $checker->check_number($row[4]);
                    
                    $csv[$i] = array_combine($keys, $row);
 
                    $new = array_push($dataArray,$csv[$i]);
                }   

                for ($i = 0; $i < count($dataArray); $i++)  { 
                    // $checkID =  $checker->check_id($dataArray[$i]);
                    // $checkname =  $checker->check_name($dataArray[$i]);
                    // $checkbday =  $checker->check_bday($dataArray[$i]);
                    // $checknumber =  $checker->check_number($dataArray[$i]);
                    print_r('<pre>');
                    print_r($dataArray[$i]);
                    print_r('</pre>');  
                }  
 
            ?>

            
        </div>
    </body>
</html>

