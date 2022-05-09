<?php

    class PasswordValidator {
        var $name;
        var $password;

        function __construct($name, $password)
        {
            $this->name = $name;
            $this->password = $password;
        }

        function isValid() {
            
            if ((strlen($this->password) >= 8 && $this->character($this->password))) {
                echo "La contraseña es valida.";
            } else {
                echo "La contraseña no es valida.";
            }
        }
        
        function character() {
            // echo "hola";
            $listCharacter = [".", ",", "-", "_", ";", "*"];
            $state = false;
            $count = 0;
            foreach ($listCharacter as $character) {
                /* if (str_contains($this->password, $character)) {
                    $count++;
                } */
                if (strpos($this->password, $character) !== false) {
                     $state = true;
                     $count++;
                };
            }
            return $state;
        }

        function strongPassword() {
            if (strlen($this->password) >= 12 && $this->character($this->password) >= 3) {
                echo "La seguridad de su contraseña es fuerte.";
            } 
            else if (strlen($this->password) >= 10 && $this->character($this->password) >= 2) {
                echo "La seguridad de su contraseña es media.";
            } 
            else if (strlen($this->password) >= 8 && $this->character($this->password) >= 1) {
                echo "La seguridad de su contraseña es débil.";
            } 
        }

    }


