<?php
$num = 1;
while ($num <= 100){
if($num % 3 == 0 && $num % 5 == 0) {
  echo "FizzBuzz!";
} elseif ($num % 3 == 0) {
  echo "fizz!";
} elseif ($num % 5 == 0) {
  echo "Buzz!";
} else {
  echo $num;
}$num += 1;
echo "<br>";
}
?>