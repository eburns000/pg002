<?php
echo "Hello World!";
echo "<br><br>";

$cities = array('Wenatchee', 'Chelan', 'Leavenworth', 'Quincy', 'Moses Lake');

foreach ($cities as $city) {
  echo $city;
  echo "<br><br>";
  $length = strlen($city);
  echo "Length of city name is $length characters";
  echo "<br><br>";  
}

echo "Array contains: <br>";
echo "<pre>";
print_r($cities);


?>