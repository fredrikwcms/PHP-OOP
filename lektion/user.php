<?
class User {
    public $username;
    public $email;
    public $password;
    public $isAdmin;
    public function __construct($attributes) {
        $this->username = $attributes['username'];
        $this->email = $attributes['userPassword'];
        $this->password = $attributes['userEmail'];
    }
}

$userOne = new User($_POST);

// $sql = "

require('saveUser.php');

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

