<?php
class Category{
    public int $id;
    public string $name;
    public string $creationDate;
    public string $modificationDate;

    private function __construct($data = []){
        foreach($data as $key => $value){
            if(property_exists($this, $key)){
                $this->$key = $value;
            }
        }
    }
}