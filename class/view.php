<?php
class View extends config{

    public function viewData(){
        $con = $this->con();
        $sql = "SELECT * FROM tbl_items";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(pDO::FETCH_ASSOC);

        echo "<div class='card-deck'>";
        foreach ($result as $data) {
            echo "
            <div class='card'>
            <img src='https://via.placeholder.com/300.png?text=$data[name]'>
            <div class='card-body'>
                <h5 class='card-title'>$data[name]</h5>
                <p class='card-text'>PHP $data[price]</p>
            </div>
            </div>
            ";
        }
        echo "</div>";
    }
}

?>
