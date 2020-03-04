<?php
// require('dbconfig.php')
class Test extends Dbconfig {

    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo '<h1>' . $row['fname'] . '</h1>';
        }
    }
}

public function add($formArray)
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $url = $_POST['url'];
    $category = $_POST['category'];
    
    $dbInfo = new DbInfo();
    
    $conn = $dbInfo->openConnection();
    
    $sql = "INSERT INTO `tb_links`(`title`, `description`, `url`, `category`) VALUES ('" . $title . "','" . $description . "','" . $url . "','" . $category . "')";
    $conn->query($sql);
    $dao->closeConnection();
}