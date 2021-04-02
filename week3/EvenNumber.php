<?php
    $a = [1,2,4,6,5,3,8,10,11,90];

    $evenNum = array_filter($a,fn($n)=>$n % 2 ==0); // return index that modulus 2 equal 0
?>

<h1>Pick Up Even Number in Array</h1>
<h2>
    <?php
        print_r($evenNum);
    ?>
</h2>

