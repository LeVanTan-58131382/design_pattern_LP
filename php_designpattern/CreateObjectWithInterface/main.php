<?php
interface ListA
{
    function addValue();
}

class ListA2 implements ListA
{

    function addValue()
    {
        // TODO: Implement addValue() method.
    }
}

class ArrayListAImplement implements ListA
{
    public $listA = null;

    public function __construct(ListA $listA)
    {
        $this->listA = $listA;
        return $listA;
    }

    function addValue()
    {
        // TODO: Implement addValue() method.
        echo "addValue<br>";
    }

    function deleteValue()
    {
        echo "deleteValue";
    }
}



class ArrayListA
{
    private static $ListA;

    public static function getArrayListA()
    {
        if(!self::$ListA)
        {
            self::$ListA = new self;
        }
        return self::$ListA;
    }

    public function getListA()
    {
        return new ArrayListAImplement();
    }
}

$listA = new ArrayListAImplement(new ListA2());
$listA->addValue();
$listA->deleteValue();
