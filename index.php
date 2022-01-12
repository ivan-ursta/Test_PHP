<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="action.php" method="post">
        <p>Ваше имя: <input type="text" name="name" /></p>
        <p>Ваш возраст: <input type="text" name="age" /></p>
        <p><input type="submit" /></p>
    </form>


    <?php

    $colors = array('red', 'blue', 'green', 'yellow');
    foreach ($colors as &$color) {
        $color = strtoupper($color);
    }
    unset($color); /* это нужно для того, чтобы последующие записи в
    $color не меняли последний элемент массива */
    
    print_r($colors);

    
$n1=10; //assign value 10 to variable $n1
$n2=100; //assign value 100 to variable $n2
$sum=$n1+$n2; //calculate the sum assign it to
echo "<br/><i>Sum is</i> <span style='color:red;'>".$sum."</span>";

$ar4 = array("yellow"=>"banana", "red"=>"cherry", "green"=>"apple");
echo "<br/>Length of array is ".count($ar4)."</br>";
print_r($ar4["yellow"]); 



$ar=array(11,5,89,117,56,200);
echo "</br>From while() loop:</br>";
$i=0;
while($i<count($ar))
{
 echo $ar[$i]." ";
$i++;
}
echo "</br>";
echo "</br>From for() loop sorted array:</br>";
sort($ar);
for($i=0;$i<count($ar);$i++)
{
    echo $ar[$i]." ";
}
echo "</br>";
echo "</br>From foreach() loop assotiative array:</br>";
foreach($ar4 as $k => $v)
{
echo "Key:".$k." value:".$v."<br/>";
}
?>
</body>

</html>