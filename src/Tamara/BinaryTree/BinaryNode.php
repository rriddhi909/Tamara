<?php

class BinaryNode
{

    /** @var mixed null */
    public $value = null;
    /** @var BinaryNode null */
    public $left = null;
    /** @var BinaryNode null */
    public $right = null;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
}


