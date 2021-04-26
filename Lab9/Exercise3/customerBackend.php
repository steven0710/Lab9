<?php
echo '<link rel="stylesheet" href="style.css">';
$name = $_POST["name"];
$password = $_POST["password"];
$Apple= $_POST["Apple"];
$Orange = $_POST["Orange"];
$Cheese = $_POST["Cheese"];
$typesofShipping = $_POST["typesofShipping"];
$AppleC = $Apple*3;
$OrangeC = $Orange*4;
$CheeseC = $Cheese*5;

echo "Welcome " . $name . "<br>";
echo "Password: " . $password . "<br><br>";
echo "Apple subtotal: $". $AppleC  ."    ".  "Quantity: " . $Apple. "<br>";
echo "Orange subtotal: $". $OrangeC  ."    ".  "Quantity: " . $Orange. "<br>";
echo "Cheese subtotal: $". $CheeseC  . "    ". "Quantity: " . $Cheese. "<br>";

echo "<br><br>";
if ($typesofShipping == "free")
{
    echo "Type of Shipping: Free" . "<br>"."Estimated Arrival: 7 days"."<br>"."Cost: $0";
    $sc = 0;
}
if ($typesofShipping == "overnight")
{
    echo "Type of Shipping: Overnight" . "<br>"."Estimated Arrival: 24 Hours"."<br>"."Cost: $50";
    $sc = 50;
}
if ($typesofShipping == "three day")
{
    echo "Type of Shipping: Three Day Shipping" . "<br>"."Estimated Arrival: 3 days"."<br>"."Cost: $5";
    $sc = 5;
}
echo "<br><br>";
echo "Total Cost: " . "$" . (($AppleC)+($OrangeC)+($CheeseC)+($sc));
?>