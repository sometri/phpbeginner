<!DOCTYPE html>
<html>
<body>

  <?php  
    $i = 0;

    do {
      $i++;
      if ($i == 3) continue;
      echo $i . "<br />";
    } while ($i < 6);
  ?>  

</body>
</html>
