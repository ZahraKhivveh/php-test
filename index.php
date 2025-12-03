<!-- <!-- echo "hello world";
$number = 1404 ;
echo $number ;
define('myconst' , 'username');
echo myconst ;
 
echo "zaki";
echo "hello world"; ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
 </head>
 <body>
   
echo "salam";
echo 1+1;
    
 </body>
 </html>
 
$test = "winter";
var_dump($test);

$num = 88;
var_dump($num);

$adad = 14.4;
var_dump($adad);

$bobo = true;
var_dump($bobo);

$a =10;
$b =20;
// $a = $a + $b;
$a += $b ;
echo $a ;

$x = 14;
$y = 10;
var_dump($x < $y);

$e =100;
// ++$e;
echo $e++;

$test = 123;
$a ="jj";
var_dump(!$a);

$aa = 120;
if($aa >= 120){
   echo 'yes';
}else{
   echo 'no';
}
   
$a =100;
switch($a){
   case $a =2;
   echo 'num 2';
   break;
   case $a =100;
   echo 'num =100';
   break;
   default :
   echo 'false' ;
} -->

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>php</title>
      </head>
      <body>
         <form action="index.php" method="get">
            <label for="">username</label>
            <input type="text" name="username">
            <br>
            <button>send</button>
            
         </form>
      </body>
      </html>
      <?php
      echo $_GET['username'];
            
?>
