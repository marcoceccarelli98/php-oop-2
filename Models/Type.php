<?php

class Type extends Category
{
    private string $typeName;

    public function __construct($_typeName)
    {
        $this->typeName = $_typeName;
    }

    // GETTER
    public function gettypeName(): string
    {
        return $this->typeName;
    }

    // SETTER
    public function settypeName($_typeName): void
    {
        $this->typeName = $_typeName;
    }
}
