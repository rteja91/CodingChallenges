<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;
*/
function table($num1, $num2)
    {
    	$tarray = array(); 
    	if($num1==1)
            return 1;
     for  ($k=1; $k<=$num2; $k++){
     	 
               	 
     	  $tarray[$k-1]= $num1*$k;
     	
           }
     return $tarray; 
     
    }

 $t=trim(fgets(STDIN));
 
    for($k=1;$k<=$t;$k++)
    {
        $i=fgets(STDIN);
        
        global $n ;
        $r = explode(" ", $i);
        $a = $r[0];
        $b = $r[1];
        $n = $r[2];
     $A = table($a, $n);
     $B = table($b, $n);
     $unique = array_unique(array_merge($A,$B)); 
      sort($unique);
     echo  $unique[$n-1]."\n";
    }


?>
