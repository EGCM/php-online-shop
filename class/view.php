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
            <div class='col-sm-4 my-3'>
            <div class='card'>
            <img src='https://via.placeholder.com/300.png?text=$data[name]'>
            <div class='card-body'>
                <h5 class='card-title'>$data[name]</h5>
                <p class='card-text'>PHP $data[price]</p>
            </div>
            </div>
            </div>
            ";
        }
        echo "</div>";
    }

    public function listData(){
        $con = $this->con();
        $sql = "SELECT * FROM tbl_items";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(pDO::FETCH_ASSOC);

        echo "<h3 class='mb-4'>Item list</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Created</th>
                    <th>Last Updated</th>
                    <th></th>
                </tr>
            </thead><tbody>
            ";
        foreach ($result as $data) {
            echo "<tr>";
            echo "<td>$data[name]</td>";
            echo "<td>$data[price]</td>";
            echo "<td>$data[created]</td>";
            echo "<td>$data[updated]</td>";
            echo "
                <td>
                    <a class='btn btn-info btn-sm' href='/online-shop/update-item.php?id=$data[id]'>Update</a>
                    <a class='btn btn-danger btn-sm' href='/online-shop/list-items.php?delete=$data[id]'>Delete</a>
                </td>
                ";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }

    public function getData($id) {
        $con = $this->con();
        $sql = "SELECT * FROM tbl_items WHERE id=$id";
        $data = $con->prepare($sql);
        $data->execute();

        return $data->fetchAll(pDO::FETCH_ASSOC);
    }

}

?>
