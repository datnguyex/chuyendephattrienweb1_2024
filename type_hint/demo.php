<?php
declare(strict_types=1);

require_once('C.php');
// require_once('I.php');
require_once('A.php');
require_once('B.php');


class Demo {
    // public function typeXReturnY(): X {
    //     echo __FUNCTION__ . "<br>";
    //     return new Y();
    // }


    public function typeAReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeAReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeAReturnC(): A {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeAReturnI(): A {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeAReturnNull(): A {
        echo __FUNCTION__ . "<br>";
        return new null();
    }
    public function typeBReturnA(): B {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeBReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeBReturnC(): B {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeBReturnI(): B {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeBReturnNULL(): B {
        echo __FUNCTION__ . "<br>";
        return new NULL();
    }
    public function typeCReturnA(): C {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeCReturnB(): C {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeCReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeCReturnI(): C {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeIReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeIReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeIReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeIReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeNullReturnA(): null {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeNullReturnB(): null {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeNullReturnC(): null {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeNullReturnI(): null {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeNullReturnNULL(): null {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}


$demo = new Demo;
// $demo->typeAReturnA();

$demo->typeNullReturnNULL();

