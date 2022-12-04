<?php

// 1- Search for how to make \n work in browser.
 echo nl2br("Hi somia \n my name is soha  \n Iam 21 years old");

            //************************************************** */
            
// 2-  Search 3 built-in function of a string.
echo "<br>";
echo bin2hex("Hi somia \n my name is soha  \n Iam 21 years old");


echo "<br>";
echo chunk_split("Hi somia \n my name is soha  \n Iam 21 years old" , $len=5);

echo "<br>";
echo similar_text("Hi somia \n my name is soha  \n Iam 21 years old " ,"Hi sam \n my name is nadeem  \n Iam 22 years old " );


echo "<br>";
$s= addslashes("somia 'amer' ");
echo $s;

                //********************************************************* */

//3-  Display $_SERVER in readable format.
echo"<pre>";
print_r($_SERVER);
echo"</pre>";

               //************************************************************ */

//4-  Write a PHP script to get the sum and avg of an indexed array
// after that sort it in a reverse order (highest to lowest).


   $arr=[12,45,10,25];
    $sum=0;
    foreach($arr as $no){
     $sum+= $no;
      }
      echo nl2br(" the sum of array values =" . $sum ."\n");
      $avrg= $sum / count($arr);
      echo nl2br("the average of array values =" . $avrg ."\n");
       rsort( $arr);
       echo"<pre>";
       print_r($arr);
       echo"</pre>";


             //************************************************************************ */


//  5-  Write a PHP script to sort the following associative array :

            $arr2=array("Sara"=>31,
            "John"=>41,
            "Walaa"=>39,
            "Ramy"=>40);
 //  a) ascending order sort by value
   asort($arr2);
   echo"<pre>";
   print_r($arr2);
   echo"</pre>";

   //  b) ascending order sort by Key
   ksort($arr2);
   echo"<pre>";
   print_r($arr2);
   echo"</pre>";

    //  c) descending order sorting by Value
    arsort($arr2);
    echo"<pre>";
    print_r($arr2);
    echo"</pre>";

    //  d) descending order sorting by Key  
    krsort($arr2);
    echo"<pre>";
    print_r($arr2);
    echo"</pre>";
    
  

?>