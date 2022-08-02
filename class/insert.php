<?php
class Insert extends config{
    public $name;
    public $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function insertItem(){
        $con = $this->con();
        $sql = "INSERT INTO tbl_items (name, price) VALUES ('$this->name', '$this->price')";
        $data = $con->prepare($sql);
        if ($data->execute()) {
            return true;
        } else {
            return false;
        }
        
    }
}
?>
