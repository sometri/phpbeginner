<!DOCTYPE html>
<html>
<body>
  <h1>Angkor Wat</h1>

  <?php
    // Define the Temple class to represent details of Angkor Wat
    class Temple {
      public $architect; // variable name
      public $year;
      public $origin;
      
      // Constructor to initialize temple details
      public function __construct($architect, $year, $origin) {
        $this->architect = $architect; // variable name
        $this->year = $year;
        $this->origin = $origin;
      }
    }

    // Create an instance of the Temple class representing Angkor Wat
    $myTemple = new Temple("Soriya Varaman II & Jaya Varaman VII", "12th century", "Cambodia");

    // Use foreach to iterate over the properties of the $myTemple object
    foreach (get_object_vars($myTemple) as $property => $value) {
      echo ucfirst($property) . ": $value<br>"; // Convert first character of property name to uppercase
    }
  ?>

</body>
</html>
