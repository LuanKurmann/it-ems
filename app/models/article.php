<?php 
namespace App\Models;

class Article
{
    public $id;
    public $title;
    public $description;
    public $amount;
    public $color;
    public $brand;
    public $image;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getBrand()
    {
        return $this->brand;
    }
    public function getImage()
    {
        return $this->brand;
    }

    // SET METHODS
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setAmount(string $amount)
    {
        $this->amount = $amount;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }
    public function setImage(string $brand)
    {
        $this->brand = $brand;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

    public function read(int $id)
    {
        return $this;
    }
}