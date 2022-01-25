<?php
interface Duck {
    public function quack();
    public function fly();
}

class Pato implements Duck {
    public function quack() {
        echo "Quack!"."<br>";
    }
    public function fly() {
        echo "I'm flying!"."<br>";
    }
}

interface Turkey {
    public function gobble();
    public function fly();
}


class Pavo implements Turkey {
    public function gobble() {
        echo "Gobble gobble..."."<br>";
    }
    public function fly() {
        echo "I'm flying a short distance."."<br>";
    }
}

class TurkeyAdapter implements Duck {
private $turkey;

public function __construct( Turkey $turkey ) {
    $this->turkey = $turkey;
}

public function quack() {
    $this->turkey->gobble();
}

public function fly() {
    for( $i = 5; $i > 0; $i-- ) {
        $this->turkey->fly();
    }
}
}


function duck_interaction($duck) {
$duck->quack();
$duck->fly();
}

?>