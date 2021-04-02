<?php
    require_once("ABA.php");
    require_once("Wing.php");
    require_once("PiPay.php");

    $records = [
        new ABA("NIKE Shoes", 12, 1),
        new ABA("G-Shock Watch", 32, 1),
        new ABA("Wireless Mouse", 12, 1),
        new ABA("T-Shirt", 2.5, 3),
        new ABA("Writing Book", 3.2, 2),

        new Wing("IPhone Case", 3.5, 1),
        new Wing("Note Book", 0.5, 10),
        new Wing("Mac Pro 2020", 1960, 1),
        new Wing("Hand Bag", 28, 1),
        new Wing("Pencil", 0.75, 35),

        new ABA("Wireless Mouse", 15, 5),
        new PiPay("Keyboard", 15.5, 100),
        new PiPay("Jeans", 8, 5),
        new PiPay("Tomato Sauce", 2.5, 8),
        new PiPay("Klasor", 3.5, 5),
    ];
    
    $numABA = 0;
    $numWingAndPipay = 0;

    for($i=0 ; $i<count($records); $i++ ){
        if($records[$i]->getPaymentType() == "ABA"){
            $numABA ++;
        }else{
            $numWingAndPipay ++;
        }
    }

    function displaySortItemRow($records){
        $str = "";
        usort($records,fn($r1,$r2)=> $r2->getAmount() <=> $r1->getAmount());
        for($i=0 ; $i<count($records); $i++ ){
            $str .= "<tr>";
            $str .= "<td>". $records[$i]->item ."</td>";
            $str .= "<td>". $records[$i]->price ."</td>";
            $str .= "<td>". $records[$i]->qty ."</td>";
            $str .= "<td>". $records[$i]->getPaymentType() ."</td>";
            $str .= "<td>". $records[$i]->getAmount() ."</td>";
            $str .= "</tr>";
        }
        return $str;
    }
?>
<head>
    <title>Online Payment Method</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="product.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Online Payment Methods</h1>
    <h4>1. Number of sales by ABA method is <?php echo $numABA; ?></h3>
    <h4>2. Number of sales by Wing and PiPay method is <?php echo $numWingAndPipay; ?></h3>

    <h4>3.Display all sales ordering by biggest total amount</h3>
    <table class="table table-striped container">
        <tr>
            <th scope="col">Item</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Method</th>
            <th scope="col">Total</th>
        </tr>
        <?php echo displaySortItemRow($records);?>
    </table>
</body>