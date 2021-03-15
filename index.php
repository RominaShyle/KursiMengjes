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
 
echo "Gjenden $count shumefisha te 3.";
echo '<br/>';



//CIKLI FOREACH

$numrat = [2,3,7,10];
$numrat2 = [12,63,76,10];

foreach ($numrat2 as $celesi=>$numri){

    $hapi = $celesi + 1;
    echo "$celesi : $numri. Hapi i  $hapi<br>";



}










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




<table id="t01">
  <tr>
    <th>Nr</th>
    <th>Note</th>
   
  </tr>

<?php 



for($i = 1; $i<=10; $i++){

    echo "<tr>";
    echo "<td> $i</td>";
    echo "<td>";

    if($i%5 == 0){
        echo "=> shumefish.";
    }
    echo "</td>";

    echo "</tr>";

}





// $text = '';

// for($i = 1; $i<=10; $i++){

//     $text  .= 
//     "<tr>
//     <td> $i</td>
//     <td>";

//     if($i%5 == 0){
//         $text = $text ."=> shumefish.";
//     }
//     $text  .=  "</td>";

//     $text  .=  "</tr>";

// }

// echo $text;





?>


  
</table>


<?php 

//Ushtrim: Mbush nje array me numrat 5-1

$arr_2 = [];

for($i=0; $i<5; $i++){

    $arr_2[$i] = 5 - $i;

}
echo "<pre>";
print_r($arr_2);
echo "<pre>";




//ASSOCIATIVE ARRAYS

$assoc = array(
    "Peter"=>28,
    "Ann"=>16,
    "John" => 23);


    $assoc['Jane'] = 31; //Nqs indeksi ekzisto, mbivendoset. Nese nuk gjendet, e shton si te fundit

echo "<pre>";
var_dump($assoc);
echo "<pre>";


foreach($assoc as $name => $age){

    echo "$name is $age years old. <br>";
    
}

echo "<br>";

$colors = [
'Red'=> '#ff0000',
'Green'=> '#00ff00',
'Blue'=> '#0000ff'];


foreach($colors as $key => $item){

echo "<span style='color:$item'>$key </span>'s code is<span style='color:$key'> $item </span><br>";

}

echo "<br>";


#USHTRIME ARRAYS


//1. Jepet nje array, fshi nje element nga array dhe me pas afisho arrayn me celesa te normalizuar.
// a) Kur eshte array numerike
//b) Kur eshte associative array

$numeric_array = [3,18,23,6];


//unset(array_name[index]) => heq indeksin e array, bashke me vleren perkatese

unset($numeric_array[2]);
unset($colors['Red']);



//array_values(array_name) => te kthen arrayn si nje array me indekse te vendosura sipas standartit (te numeric arrays)

$x = array_values($numeric_array);
$y = array_values($colors);



//2.Afisho vleren e pare te nje array associative 

//reset(array_name) => kthen vleren e pare te nje array

echo reset($colors);



// sort(array_name); NUK KRIJOJNE KOPJE, RENDISIN ARRAYN DHE E KTHEJNE TE RENDITUR
/*3. rendit arrayn:
a) Rend rrites sipas vleres => asort(array_name)
b) Rend rrites sipas celesit  => ksort(array_name)
c) Rend zbrites sipas vleres  => arsort(array_name)
d) Rend zbrites sipas celesit  => krsort(array_name) 
*/

echo "<pre>";
print_r($assoc);
echo "<pre>";

asort($assoc);
echo "Rend rrites sipas vleres:";

echo "<pre>";
print_r($assoc);
echo "<pre>";


ksort($assoc);
echo "Rend rrites sipas celesit";

echo "<pre>";
print_r($assoc);
echo "<pre>";




arsort($assoc);
echo "Rend zbrites sipas vleres";

echo "<pre>";
print_r($assoc);
echo "<pre>";


krsort($assoc);
echo "Rend zbrites sipas celesit";

echo "<pre>";
print_r($assoc);
echo "<pre>";



//4. llogarit temperaturen mesatare, 5 me te uletat dhe 5 me te lartat ne STRING

$temp_str = "28,31,-2,-16,19,43,12,14,16,-4,-10,12,28,36";
 //explode(delimeter,string) =>kthen nje array te indeksuar nga nje string ku elementet ndahen nga delimeter

 $avg_temp = 0;
 $temp_array = explode(',', $temp_str);
 echo "<pre>";
 print_r($temp_array);
 echo "<pre>";
 
$temp_total = 0.0; 
$temp_size = count($temp_array);

foreach($temp_array as $v){
    $temp_total += $v;
}

$avg_temp = $temp_total/$temp_size;


asort($temp_array);
echo "<pre>";
print_r($temp_array);
echo "<pre>";
$temp_array = array_values($temp_array);
echo "<pre>";
print_r($temp_array);
echo "<pre>";
echo "5 temperaturat me te uleta: <br>";
for($i=0; $i<5; $i++){

    echo $temp_array[$i] . '<br>';
}

echo "5 temperaturat me te larta: <br>";

for($i=$temp_size-1; $i>$temp_size-6; $i--){

    echo $temp_array[$i] . '<br>';
}



#FUNKSIONET 

function sum($a, $b, $c=0){
    return $a+$b+$c;


}


echo "<br> Shuma e numrave eshte: <br>";
echo sum(12,1,3);
echo "<br> Shuma e numrave eshte: <br>";
echo sum(12,1);



#ushtrim: gjej me te madhin e 4 numrave 

$a = 6;
$b = 4;
$c = 88;
$d = 16;



function max_1($a, $b){

    if($a > $b){
        return $a;
    } else return $b;
}

$max1 = max_1($a,$b);
$max2 = max_1($max1, $c);
$max3 = max_1($max2, $d);

echo "<br> Numri me i madh eshte: <br>";

echo $max3;


?>
</body>
</html>


