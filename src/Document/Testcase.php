<?php

namespace JUnitScribe\Document;

class Testcase extends Node
{
    /**
     * @param   string  $class
     * @return  $this
     * @codeCoverageIgnore
     */
    public function setClass($class)
    {
        $this->attributes['class'] = $class;
        return $this;
    }
}