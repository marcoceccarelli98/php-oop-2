<?php

class Product
{
    protected string $productName;
    protected float $price;
    protected string $image;

    public function __construct($_productName, $_price, $_image)
    {
        $this->productName = $_productName;
        $this->price = $_price;
        $this->image = $_image;
    }

    // GETTER
    public function getproductName(): string
    {
        return $this->productName;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getImage(): string
    {
        return $this->image;
    }

    // SETTER
    public function setproductName($_productName): void
    {
        $this->productName = $_productName;
    }
    public function setPrice($_price): void
    {
        $this->price = $_price;
    }
    public function setImage($_image): void
    {
        $this->image = $_image;
    }
}
