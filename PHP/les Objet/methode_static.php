<?php
        class StaticFunction{
            public static function direBonjour($nom){
                return "Bonjour,$nom !";
            }
        }

        //Appel : 
        echo StaticFunction::direBonjour(" Amine"); // Afficher Bonjour Amine
?>
