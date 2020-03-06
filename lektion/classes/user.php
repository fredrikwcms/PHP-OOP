<?php

    class User {

        public $username;
        protected $email;
        public $role = "user";

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function __destruct()    {
            //echo "the user $this->username has been deleted<br>";
        }

        public function __clone() {
            $this->username = $this->username . "(cloned)<br>";
        }

        public function message()   {
            return "$this->email has logged in<br>";
        }
    }

    class AdminUser extends User {
        public $level;
        public $role = "admin";

        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }
        public function message()   {
            return "$this->email has logged in<br>";
        }
    }

    class CreateUser extends User {
        public $username;
        public $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function setUserInfo($val1, $val2) {
            $this->username = $val1;
            $this->email = $val2;
            return $this;
        }

        public function __destruct() {
            
        }
    }