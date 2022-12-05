<?php

    /* -------------------- Object Oriented Programming ------------------- */

    /*
      FROM PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hol "properties" and
      "methods". Objects can be created from classes.
    */

    class User{
        // Properties are attributes that belong to a class

        // ACCESS MODIFIERS: PUBLIC, PRIVATE, PROTECTED
        // public - can be accessed from anywhere
        // private - can only be accessed from inside the class
        // protected - can only be accessed from inside the class and by inheriting classes

        public $name;
        public $email;
        public $password;

        // A Constructor is a method that runs when an object is created
        public function __construct($name, $email, $password){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        // Method is a function that belongs to a class
        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }

    }

    // Iniatalise a user object
    $user1 = new User('Muddathir','muda@gmail.com','password');
    $user2 = new User('Jared','jeremy@gmail.com','password');
    $user3 = new User('Ayyoob','oob@gmail.com','password');

    // var_dump($user1);
    // var_dump($user2);
    // var_dump($user3);

    // Inheritance
    class Employee extends User{
        public function __construct($name, $email, $password, $title){
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }

        public function get_title(){
            return $this->title;
        }
    }

    $employee1 = new Employee('Muddathir','muda@gmail.com','password','Intern');

    echo $employee1->get_title();