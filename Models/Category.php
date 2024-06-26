<?php

class Category
{
    protected string $categoryName;
    protected string $icon;

    public function __construct($_categoryName)
    {
        $this->categoryName = $_categoryName;

        if ($this->categoryName === "dog") {
            $this->icon = "fas fa-dog";
        } elseif ($this->categoryName === "cat") {
            $this->icon = "fas fa-cat";
        }
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
