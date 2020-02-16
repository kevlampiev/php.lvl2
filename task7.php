<?php

//Непонятно в чем отличие от задания 6
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
$a1 = new A; //только скобок нет, но они и не нужны, если контруктор по умолчанию
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
