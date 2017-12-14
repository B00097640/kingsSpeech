<?php
class Product
{
    private $id;
    private $description;
    private $quantity;

    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}
