<?php
phpinfo();

ini_set('display_errors',1);

ini_set('display_startup_errors', 1);
echo "$dinna";


  
define("WEBSITE NAME","http://localhost:8080/test/");
//echo WEBSITE NAME;
echo constant("WEBSITE NAME");

echo "<br>";

 

echo $_SERVER['SERVER_NAME']  . "<br>"; //server name
echo 'User IP Address - '. $_SERVER['REMOTE_ADDR']  . "<br>"; //ip adress
echo $_SERVER['SERVER_PORT'] . "<br>"; // server port
$fullpath = __FILE__;
echo $fullpath  . "<BR>"; //FILE PATH
$fileName = basename($fullpath);
echo $fileName . "<br>";



 
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10; //$a=$a+10
   $b += 5;
}

echo ("At the end of the loop a = $a and b = $b" ); //a = 50, b=25

echo"<br>";

//while loop
$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}

echo ("Loop stopped at i = $i and num = $num" ); // i = 10 , num =40

echo"<br>";
#6
//do...while
$i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo ("Loop stopped at i = $i" ); // i=10
  echo"<br>";

#7
//foreach
$array = array( 1, 2, 3, 4, 5);
// $array = [1,2,3,4,5];
         
foreach( $array as $value ) {
   echo "Value is $value <br />";
} 
/* O/P
Value is 1
Value is 2
Value is 3
Value is 4
Value is 5 */
$i=10;
switch ($i) {
    case $i<5:
        echo "stay at home";
        break;
    case $i==5:
        echo "Go to kindergargen";
        break;
    case $i>=6 &&  $i<12:
        echo "Go to grade:".($i-5);
        break;
}
   







?>