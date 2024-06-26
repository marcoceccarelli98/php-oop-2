<?php

class Type extends Category
{
    protected string $typeName;

    public function __construct($_categoryName, $_typeName)
    {
        parent::__construct($_categoryName);
        $this->typeName = $_typeName;
    }

    // GETTER
    public function getTypeName(): string
    {
        return $this->typeName;
    }

    // SETTER
    public function setTypeName($_typeName): void
    {
        $this->typeName = $_typeName;
    }
}
