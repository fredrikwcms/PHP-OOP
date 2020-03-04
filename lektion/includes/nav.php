<?
class Navbar {
    public $links;

    public function __construct($links) {
        $this->links = $links;
    }
}

$links = [
    'www.google.se',
    'http://localhost/php-oop/lektion/',
    'http://localhost/php-oop/lektion/getUsers.php'
];

$navbar = new Navbar($links);
