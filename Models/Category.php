<?php

class Category extends Product
{
    private string $categoryName;
    private string $icon;

    public function __construct($_productName, $_price, $_image, $_categoryName)
    {
        parent::__construct($_productName, $_price, $_image);
        $this->categoryName = $_categoryName;
    }

    // GETTER
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }
    public function getIcon(): string
    {
        return $this->icon;
    }

    // SETTER
    public function setCategoryName($_categoryName): void
    {
        $this->categoryName = $_categoryName;
    }
}
