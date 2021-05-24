<?php
namespace Test;

/**
 * Class TestC
 */
class TestC
{


    /**
     * Short desc
     *
     * @return false
     */
    public static function abc(): bool
    {
        $x = 0;
        if ($x === 0) {
            return false;
        }

        return true;
    }//end abc()
}//end class
