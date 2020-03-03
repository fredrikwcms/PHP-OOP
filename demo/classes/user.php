<?
class User {
    public $id;
    public $name;
    public $email;
    public $password;
    public $selfie;

    public function __construct($id, $name, $email, $password, $selfie) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->selfie = $selfie;
    }
}

$onPost = [
    '1',
    'Peter', 
    'peter@mi.se', 
    'abc123', 
    '../img/pizzahatt.jpg'
];

$userOne = new User($onPost);

var_dump($userOne);
?>

<h1><? echo $userOne->name ?></h1>

<span><? echo $userOne->password ?></span>

<img src="<? echo $userOne->selfie ?>" alt="" style="height: 100px">