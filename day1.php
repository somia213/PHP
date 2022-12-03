<?php
// the first assignment 
//git phpinfo();
 
//********************************** */

// the second assignment

define("WEBSITE" ,"yahoo.com" );
echo "the website name is " .WEBSITE ;
echo "<br>";
//********************************** */

// the third assignment

print_r(" server name ---> ".$_SERVER['SERVER_NAME']) ;
echo "<br>";
 print_r("server address --> " .$_SERVER['SERVER_ADDR']);
 echo "<br>";
print_r("server port --> ".$_SERVER['SERVER_PORT']) ;

echo"<br>";

//********************************** */

// the fourth assignment


echo " file name --> " . basename(__FILE__);
echo"<br>";
echo " file path --> " . __FILE__;
echo"<br>";


//********************************** */

// the last assignment

$age= 10;
switch ($age){
    case $age< 5 :
        echo "Stay at home" ;
          break;
   case $age =5 :
       echo "Go to Kindergarden";
          break ;
   case $age>5 && $age <13 :
        echo "Go to grade";
         break ;
}

?>