<?php // OO programmeren vooorbeeld 1

    class Person {
        private $name = "";
        private $pin = "";
        private $gebdatum = "";

        function __construct($new_name, $new_gebdatum, $new_pin = "0000") {
        	$this->set_name($new_name);
            $this->set_gebdatum($new_gebdatum);
            $this->set_pin($new_pin);
    	}

        // Set and Get name
        function set_name($new_name) {
            $this->name = $new_name;
    	}

        function get_name() {
            return $this->name;
    	}

        // Set and Get pin
        function set_pin($new_pin) {
            $this->pin = $new_pin;
    	}

        function get_pin() {
            return $this->pin;
    	}

        function get_pin_format() {
            return "[Pin] --> " . $this->get_pin() . "<br>";
        }

        // Geboortedatum + leeftijd Set and Get
        function set_gebdatum($new_gebdatum) {
            $this->gebdatum = new DateTime($new_gebdatum);
        }

        function get_gebdatum() {
            return $this->gebdatum->format('Y-m-d');
            //return $this->gebdatum;
    	}

        function get_leeftijd() {
            $nu = new DateTime();
            $verschil =  $this->gebdatum->diff($nu);
            return $verschil->format('%y');
        }
    }

    $mijntante = new Person("Maria", "1940-06-05", "1111");
    $mijnoom = new Person("Suikeroom", "1942-08-13");
    $ik = new Person("Armand", "1992-07-25", "517226");

    //echo "Een class schrijf je met een hoofdletter
    //een object met een kleine letter<br><br>";

    echo "Ik heb 3 objecten: <br><br>"
    . "[Naam] --> " . $mijntante->get_name() . "<br>"
    . " [Geboortedatum] --> " . $mijntante->get_gebdatum() . "<br>"
    . " [leeftijd] --> " . $mijntante->get_leeftijd() . "<br>"
    . " " . $mijntante->get_pin_format()
    . "<br>"

    . "[Naam] --> " . $mijnoom->get_name() . "<br>"
    . " [Geboortedatum] --> " . $mijnoom->get_gebdatum() . "<br>"
    . " [leeftijd] --> " . $mijnoom->get_leeftijd() . "<br>"
    . " " . $mijnoom->get_pin_format()
    . "<br>"

    . "[Naam] --> " . $ik->get_name() . "<br>"
    . " [Geboortedatum] --> " . $ik->get_gebdatum() . "<br>"
    . " [leeftijd] --> " . $ik->get_leeftijd() . "<br>"
    . " " . $ik->get_pin_format()
    . "<br>";

?>
