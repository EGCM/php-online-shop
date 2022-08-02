<?php
function insertItem(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $price = $_POST['price'];

        if (!empty($name) and !empty($price)) {
            $insert = new Insert($name, $price);
            if ($insert->insertItem()) {
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        You have inserted item successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Insert item error.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }    
        }
    }
}

?>