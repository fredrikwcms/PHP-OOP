<?
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('dbconn.php');
// class User {
//     public $username;
//     public $email;
//     public $password;
//     public function __construct($attributes) {
//         $this->username = $attributes['username'];
//         $this->email = $attributes['userPassword'];
//         $this->password = $attributes['userEmail'];
//     }
//     public function form_submit($attributes) {
//         $this->username = $attributes['username'];
//         $this->email = $attributes['userPassword'];
//         $this->password = $attributes['userEmail'];
//     }
// }

// if(!empty($_POST)){
//     $user = new User($_POST);
//     return $user;
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="user.php" method="post">
        <div class="form-group">
            <label for="username">Välj ett användarnamn:</label>
            <input class="form-control" type="text" name="username">
        </div>
        <div class="form-group">
            <label for="userEmail">Skriv in din email:</label>
            <input class="form-control" type="text" name="userEmail">
        </div>
        <div class="form-group">
            <label for="userPassword">Välj ett lösenord:</label>
            <input class="form-control" type="password" name="userPassword">
        </div>
        <button type="submit" class="btn btn-primary">Skapa användare</button>
        <? 
 ?>

    </form>
</div>
</body>
</html>