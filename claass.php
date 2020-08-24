<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and Object</title>
</head>
<body>
    <?php
      class Laptop {

        public $name;
        public $type;
        public $activeState;
        //constructor funtion
        function __construct($name, $type){
            $this->name = $name;
            $this->type = $type;
            $this->activeState = False;
        }
        //method untuk memberikan nilai property pada objek
        function turnOn(){
            echo "Laptop dinyalakan";
            $this->activeState = True;
        }

        function turnOff(){
            echo "Laptop dimatikan";
            $this->activeState = False;
        }

      }

      //membuat instance objek baru
      $laptopJohn = new Laptop("Asus", "VivoBook");


      var_dump($laptopJohn);
      echo "<br>";

      //menampilkan satu properti
      echo "Nama Laptop: ";
      echo $laptopJohn->name;

      //menjalankan method pada class
      echo "<br> <br>";
      $laptopJohn->turnOn();
      echo "<br>";
      echo $laptopJohn->activeState;
      
      echo "<br> <br>";
      $laptopJohn->turnOff();

      echo "<br>";
      //membuat instance objek baru
      $laptopJane = new Laptop("Asus", "ROG");

      var_dump($laptopJane);
      

    ?>
</body>
</html>