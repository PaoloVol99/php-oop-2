<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    
    protected $description;
    protected $ingredients;
    protected $name;
    protected $price;
    protected $image;

    function __construct($_name, $_price, $_category, $ingredients) {

        parent::__construct('Food', $_category);

        $this->name = $_name;
        $this->price = $_price;
        $this->ingredients = $_ingredients;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_name($new_value) {
        $this->name = $new_value;
    }

    public function get_price() {
        return $this->price;
    }

    public function set_price($new_value) {
        $this->price = $new_value;
    }

    public function get_description() {
        return $this->description;
    }

    public function set_description($new_value) {
        $this->description = $new_value;
    }

    public function get_ingredients() {
        return $this->ingredients;
    }

    public function set_ingredients($new_value) {
        $this->ingredients = $new_value;
    }
}

?>