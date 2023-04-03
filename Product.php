<?php

require_once __DIR__ . '/Category.php';

class Product {
    
    protected $price;
    protected $name;
    protected $type;
    protected Category $category;

    function __construct($type, $_category) {

        $this->type = $_type;
        $this->category = $_category;
    }

    public function get_category() {
        return $this->category;
    }

    public function set_category($new_value) {
        $this->category = $new_value;
    }

    public function get_type() {
        return $this->type;
    }

    public function set_type($new_value) {
        $this->type = $new_value;
    }
}

?>