<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: green;
        }
        div
        {
            
        width: auto;
        border: 1px solid black;
        padding: 10px;
        background-color: white;
        }
        .bill
        {
        width: 200px;
        border: 1px solid black;
        padding: 10px;
        background-color: white;
        position: absolute;
        left: 40%;
        }
    </style>
</head>
<body>
    <?php
    echo "<h2>Thanks for your order. Here it is!</h2>";
    $numberc=$_REQUEST['number'];
    $size=$_REQUEST['size'];
    $quantityc=$_REQUEST['quantityc'];
    $quantitys  =$_REQUEST['quantitys'];
    $name=$_REQUEST['name'];
    
    

    $price=0;
    
    for($j=0; $j<$numberc; $j++)
    {
        echo "<div>";
    if($size=="small")
    {
        echo "<img src='images/cup.jpg' height='100px'>";
        global $price;
        $price=1.00;
    }
    else 
    if($size=="medium")
    {
        echo "<img src='images/cup.jpg' height='130px'>";
        global $price;
        $price=1.50;
    }
    else
    if($size=="large")
    {
        echo "<img src='images/cup.jpg' height='160px'>";
        global $price;
        $price=2.00;
    }
    else
    if($size=="exlarge")
    {
        echo "<img src='images/cup.jpg' height='200px'>";
        global $price;
        $price=2.50;
    }
    
       
    
    if($quantityc>0)
        {
            echo "<img src='images/plus.jpg' height='50px'>";
            for($i=0; $i<$quantityc; $i++)
            {
                echo "<img src='images/cream.jpg' height='80px'>";  
            }
        }

        if($quantitys>0)
        {
            echo "<img src='images/plus.jpg' height='50px'>";
            for($i=0; $i<$quantitys; $i++)
            {
                echo "<img src='images/sugar.jpg' height='80px'>";  
            }
        } 

        echo "</div>";
    echo"<br>";

    }
    $tax=$price*$numberc*0.13;
    $total=($price*$numberc)+$tax;
    $uname=empty($name);

    echo "<div class='bill'>";
    echo "<br>";
    echo "Order Bill:";
    echo "<br>";
    echo "<br>";
    if($uname==false)
    {
        echo "Name: $name";
        echo "<br>";
    }
    echo "Date: ".date("d-m-y");
    echo "<br>";
    echo "----------------------------";
    echo "<br>";
    for($k=0; $k<$numberc; $k++)
    {
    echo "Coffe ($size) = $    $price";
    echo "<br>";
    }
   
    echo "----------------------------";
    echo "<br>";
    echo "Tax: $          $tax";
    echo "<br>";
    echo "Total price: $ $total";
    echo "</div>";
    


    


    ?>
</body>
</html>