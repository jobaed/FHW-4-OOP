<?php

class Product{
    private $name;
    private $price;
    private $description;

    public function __construct($name = '', $price = '', $description = '')
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    // Get
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getDescription(){
        return $this->description;
    }

    // Set
    public function setName($name){
        $this->name = $name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setDescription($description){
        $this->description = $description;
    }

    // Display 
    public function readProduct(){
        echo "Your Product Name : {$this->name}.\nPrice = {$this->price}.\nSpecification : {$this->description}\n";
    }
}

$laptop = new Product("Hp Notebook", "510000", "Hp Notebook 15bs101ne Core i5 8th Gen 4GB Ram");

$laptop->readProduct();
echo $laptop->getName()."\n";

$laptop->setName("Apple Pro Book");
echo $laptop->getName();