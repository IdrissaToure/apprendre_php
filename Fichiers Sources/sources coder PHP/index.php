<?php
namespace app\http;
interface foo_interface {

}

trait Bar_trait {

}

abstract class controller {
    abstract function BarMethod();
}

class home_controller extends controller implements foo_interface {
    use Bar_trait;
    const foo_constante=8;

    var $foo=TRUE;

    static final function FooMethod($arg1,$arg2) {

    }

    function BarMethod() {

    }
}

if( !isset ($home) )
{
    $home=new home_controller();
}

var_dump ( $home );
