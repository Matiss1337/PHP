<?php



class User
{
    //properties are variables that belong to a class
    public $name;
    public $email;
    public $password;


    //1111
    //methods are functions that belong to a class
    function set_name($name)
    {
        $this->name = $name;
    }

    //2222
    function get_name()
    {
        return $this->name;
    }

    //a constructor is a method that is called when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}


//Instantiate a new user object
$user1 = new User("Matt", "matissj1337@gmail.com", "password123");



// //1111
// //changing property
// // $user1->name = 'John Doe';

// //changing property with method
// $user1->set_name('John Doe');


// var_dump($user1);


// ///2222
// echo $user1->get_name();


// Inheritance
//basicaly use the User for base and add ur variables, lik eTitle here
class employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title()
    {
        return $this->title;
    }
}

// then create new object with new class and pass the variables

$employee1 = new employee("Sara", "Sara@gmail.com", "password123", "CEO");

echo $employee1->get_title();
