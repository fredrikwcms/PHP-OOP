<?
class User {
    public $username;
    private $email;
    public $role = 'member';

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    // public function __destruct() {
    //     echo 'Destroying ' . __CLASS__;
    // }

    // Getter
    public function getEmail() {
        return $this->email;
    }

    // Setter
    public function setEmail($val) {
        return $this->email = $val;
    }
}

class SuperUser extends User {
    public $role = 'superuser';
    public $password;

    public function __construct($username, $email, $password) {
        parent::__construct($username, $email);
        $this->password = $password;
    }
}

    $member1 = new User('pidde', 'peter@mail.nu');
    // print_r($member1);
    // echo '<br>';
    // print_r($member1);

    $admin = new SuperUser('admin', 'admin@admin.se', 'katt123');
    // print_r($admin);