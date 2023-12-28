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

    // Display the details of the Angkor Wat temple
    echo "Architect: " . $myTemple->architect . "<br>";
    echo "Year: " . $myTemple->year . "<br>";
    echo "Origin: " . $myTemple->origin . "<br>";
  ?>

</body>
</html>
