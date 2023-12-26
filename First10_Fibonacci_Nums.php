<!DOCTYPE html>
<html>
<body>

<h2>First 10 Fibonacci Numbers</h2>
<p>a sequence of numbers in which each number is the sum of the two preceding ones, usually starting with 0 and 1.</p>

<?php  
  $first = 0;
  $second = 1;


  for ($i = 0; $i < 10; $i++) {
    $next = $first + $second;
    echo $next . "<br/>";
    $first = $second;
    $second = $next;
  } 
?>  

</body>
</html>
