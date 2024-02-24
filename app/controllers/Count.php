<?php
require('app/models/Counter.php');

Class CounterController {

    public function index() {
        $counter = new Counter();

        $counter -> increment();

        $counter -> write();

        echo($counter -> __toString() );
    }

}

$CC = new CounterController();

$CC -> index();