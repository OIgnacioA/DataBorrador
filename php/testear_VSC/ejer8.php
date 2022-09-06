
<?php


class turing {

    protected static function iam() {
    echo "turing ";      
    }

    public static function youare() {
        static::iam();
    }

} //turing turing turing turing 

class A extends turing {
    
    public static function test() {
        turing::youare();
        self::youare();
        parent::youare();
        A::youare();
        static::youare();
    }

    public static function iam() {
        echo "A ";
    }

}

class B extends A {

    public static function iam() {
        echo "B ";
    }

}





?>