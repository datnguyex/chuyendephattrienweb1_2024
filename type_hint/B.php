<?php
include_once('C.php');

class B extends C {
    public function b1() {
        echo "this function b1 from class B\n";
    }
}
// $foo = new B();
// $foo->b1();