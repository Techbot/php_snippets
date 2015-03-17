<?php

trait A {
    function testFunction() {
    echo 'hello'; }
}
trait B {
    function testFunction() {
    echo 'world'; }
}
class TestClass {
    use A, B {
        A::testFunction insteadof B;
        B::testFunction as world;
    }
}


$o = new TestClass;
$o->testFunction();
echo ' ';
$o->world();

