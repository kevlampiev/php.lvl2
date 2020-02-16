<?php
class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A
{
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //$x класса А =1
$b1->foo(); //другой $x от класса B =1
$a1->foo(); //++$x(A)   = 2
$b1->foo(); //++$x(B)   = 2
