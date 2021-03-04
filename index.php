<?php 

// phpinfo();

//KONSTANTET


define('MY_SITE', "Web 2020");

echo MY_SITE;
//echo constant('MY_SITE');

# VARIABLAT

$numer = 89; //int
$numer_float = 89.98; //float
$str = "Ky eshte nje string"; //string
$numer_double = 89.99008; //double
$vlere_null = null; //pavlere

$is_true = true; //boolean
$arr = [1,3,5]; //array

echo "<pre>";
var_dump($arr);
echo "</pre>";

// echo "<pre>";
// print_r($arr);
// echo "</pre>";


#STRINGS

$str = "Hello World!";
echo strlen($str); //nxjerr numrin e karaktereve
echo "<br>";
echo str_word_count($str); //kthen numrin e fjaleve, dallohen nga space

echo "<br>";

echo str_replace('Hello','Morning', $str);
//zevendeson fjalen ne string, nese s'e gjen s'e ndryshon.


//KONKATENIMI=> BEHET ME PIKE
//thonjezat dyshe jane tolerante, ska nevoje per konkatenim



$emri = 'John';
echo "<br>";

echo 'Emri im eshte $emri '.$emri.'.';
echo "<br>";
echo "Emri im eshte $emri";

//if else 

$a = 6;
$b = 8;

//Me duhet te afishoj numrin me te madh 
echo '<hr/>';
echo '<br/>';


if($a > $b)
    echo "Numri me i madh eshte $a.";
    
else if($a < $b)
echo "Numri me i madh eshte $b.";
else 
echo "Numrat jane te barabarte";

//ciklet: for, while, foreach

$i = 1;

while($i<=10){
    echo '<br/>';
    echo $i;
    $i++;
}



//gjej shumen e gjithe numrave qe plotpjestohen me 3, nga 1 ne 100


$i = 1;
$sum = 0;
$count = 0;


while($i<=100){
    if($i % 3 == 0){
        $sum += $i;
        $count += 1;
        if($count == 20){
            echo '<br/>';
            echo  $i;
        }
    }
    $i++;
}



echo '<br/>';

echo "Shuma eshte : $sum";
echo '<br/>';
 
echo "Gjenden $count plotpjestuesa te 3";












?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo MY_SITE;?></title>
</head>
<body>
    

    <?php 
    
    echo "<h1>Pershendetje!</h1>";
    
    
    ?>
</body>
</html>


