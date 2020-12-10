<?php
    require_once('index.php');
    class Bird extends Human{
        function fly(){
            
        }
    }

    $bird = new Bird();
    $bird->setName('インコ');
    $bird->greeting('やっほー');