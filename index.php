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

<!-- <!DOCTYPE html>
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
      </html> -->
      

       <?php
      //  for($i = 0 ; $i <=10 ; $i++){
      //    echo $i ;
      //  }

      //  $t = 0;
      //  while($t <=1){
      //    $t++;
      //    echo $t . "<br>";
      // }
      // $array = ["a" , "b" , "c"];
      // var_dump($array);
      // "<br>";
      // $sss =[1 , 2, 3, 4, 5];
      // foreach($sss as $sss){
      //    echo $sss;
      // }

      // $int = null;
      // echo empty ($int);
      // var_dump($int);

      // $u=10;
      // if(isset($u)){
      //    echo"isset";
      // }else{
      //    echo"not isset";
      // }

      // function fal(){
      //    echo 1 ."<br>";
      //    echo "maryam" ."<br>";
      //    echo "true" ."<br>";
      // }
      // fal();

      // function value($name){
      //    echo "hello $name";
      // }
      // value("zari");
      

       // <!DOCTYPE html>
      // <html lang="en">
      // <head>
      //    <meta charset="UTF-8">
      //    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      //    <title>calcutation</title>
      // </head>
      // <body>
      //    <form action="index.php" method="post">
      //    <input type="text" name="num1">
      //    <br>
      //    <br>
      //    <input type="text" name="num2">
      //    <br>
      //    <br>
      //    <select name="sign" id="">
      //    <option value="+">+</option>
      //    <option value="-">-</option>
      //    <option value="*">*</option>
      //    <option value="/">/</option>
      //    </select>
      //    <button>calculation</button>
      //    </form>
      // </body>
      // </html>
      
      // if (isset($_POST['num1']) && isset($_POST['num2'])){
      //    $number1 = $_POST['num1'];
      //    $number2 = $_POST['num2'];
      //    $operator = $_POST['sign'];

      //    switch($operator){
      //       case "+";
      //       $result = $number1 + $number2 ;
      //       break;
      //       case "-";
      //       $result = $number1 - $number2 ;
      //       break;
      //       case "/";
      //       $result = $number1 / $number2 ;
      //       break;
      //       case "*";
      //       $result = $number1 * $number2 ;
      //       break;
      //       default;
      //       $result ="unvalued";
      //    }
      //    echo $result . "<br>";
      //    echo gettype($result). "<br>" ;
      // }

      // define('username' , 'zari');
      // echo 'username';

      // $a = 20;
      // $b = 30;
      // if($a = 20 and $b = 30){
      //    echo "true";
      // }else{
      //    echo "false" . "<br>";
      // }
      // ($a == 210)? "true" : "false";

      // $user = [1 , 2 , 3 , 4];
      // echo "<pre>";
      // var_dump($user);
      // echo "</pre>" ;

      // $people = [
      //    'name'=> "ali",
      //    'age'=>33,
      //    'job'=>"artz"
      // ];
      // echo $people['job'];

      // session_start();

      $i = 2;
      while($i <= 10){
         $i++;
         echo $i;
      }
       echo "<hr>";
       echo $_SERVER['PHP_SELF'];
       echo "<hr>";
       echo $_SERVER['SERVER_NAME'];
       echo "<hr>";
       echo $_SERVER['HTTP_REFERER'];
       echo "<hr>";
       echo $_SERVER['HTTP_HOST'];
       echo "<hr>";
       echo $_SERVER['REMOTE_ADDR'];
       echo "<hr>";
       echo $_SERVER['SERVER_ADDR'];
       echo "<hr>";
       echo $_SESSION['name'] ="zahra";
       echo "<hr>";
       $name = "schuler";

       setcookie('4',$name);
       if(isset($_COOKIE['4'])){
         echo $name." ". "set as cookie";
       }else{
         echo $name ." "."is not set as cookie";
       }

      ?>

