<?php

$arr1 =[6 , 23.5 , "ABC" , -7 , 'Aryaman'];

// var_dump($arr1);

$cnt = count($arr1);

echo "Total number of elements in array is = " . $cnt . "<br/>";

# Accessing indivisual values from the arrya.

echo "The value at index 2 is = " . $arr1[2] . "<br/>";
echo "The value at index 4 is = " . $arr1[4] . "<br/>";

# Accessing arrya values using for loop.

echo "Accessing Array value using for loop." . "<br/>";

for ($i=0; $i < $cnt; $i++) 
{ 
     echo "Index $i = " . $arr1[$i] . "<br/>";    
}


echo "Accessing Array value using foreach loop." . "<br/>";

foreach($arr1 as $var)
{
      echo "value = " . $var . "<br/>";
}

# Creating an Associative arrya.

#method 1 :

$arr2 = array(101 => 'Aryaman',
              102 => 'Kamat',
              103 => 'Stevin' ,
              104 => 'Chetan' ,
              105 => 'Adamant');

              print_r($arr2);

   # Accessing the values index wise.

   echo "The value at key 103 is = " . $arr2[103] . "<br/>";

   # Accessing the values using foreach loop.

   echo "Accessing Array value using foreach loop." . "<br/>";

   foreach($arr2 as $k => $v)
   {
        echo "$k = $v" . "<br/>";
   }

#method 2 :

$arr3['roll'] = 101;
$arr3['name'] = 'Aryamna';
$arr3['city'] = 'Pune';

print_r($arr3);

?>