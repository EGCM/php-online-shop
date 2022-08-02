<?php
class Update extends config{
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function updateItem(){
        $con = $this->con();
        $sql = "UPDATE tbl_items SET name = '$this->name', price = '$this->price', updated = NOW() WHERE id = $this->id";
        $data = $con->prepare($sql);
        if ($data->execute()) {
            return true;
        } else {
            return false;
        }
        
    }
}
?>
