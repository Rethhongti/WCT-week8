<?php
    function sum (){
        $sizeArg = func_num_args(); // number of args
        $total = 0;
        for($i=0 ; $i<$sizeArg ; $i++){
            $total += func_get_arg($i); // each elements of args
        }

        echo $total;
    }
    
?>

<h1>Sum function with multi-parameters</h1>
<h2>Results :<?php sum(1,2,3,9,4,4,0,8,3,3); ?></h2>