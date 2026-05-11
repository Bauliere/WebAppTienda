<?php
class Product{
    public int $id;
    public string $name;
    public string $description;
    public float $price;
    public string $category;
    public string $photo;
    public string $creationDate;
    public string $modificationDate;

    public function __construct($data = []){
        foreach($data as $key => $value){
            if(property_exists($this, $key)){
                $this->$key = $value;
            }
        }
    }

    public function validateParams(): bool{
        if(isset($this->name) && (strlen($this->name)>50 || preg_match('/\d/u', $this->name))){
            return false;
        }
        if(isset($this->description) && strlen($this->description)>255){
            return false;
        }
        if(isset($this->price) && $this->price<0){
            return false;
        }
        if(isset($this->photo) && strlen($this->photo)>255){
            return false;
        }
        return true;
    }
}