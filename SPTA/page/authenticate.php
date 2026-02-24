<?php
// Model
// include '../model/authModel.php'; // Adjust the path as needed

// Global variable
$page['page'] = 'Authenticate';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'login';


if (isset($_GET['function'])) {
    new ActiveAuthenticate($page);
} else {
    new Authenticate($page);
}



// ===== CLASSES =====

class Authenticate
{

    private $page = '';
    private $subpage = '';

    function __construct($page)
    {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];

        $this->{$page['subpage']}();
    }
    function login()
    {
        include(__DIR__ . '/../login/login.php');
    }
}

class ActiveAuthenticate
{
    private $page = '';
    private $subpage = '';
    // protected $authModel = '';

    function __construct($page)
    {
        $this->page       = $page['page'];
        $this->subpage    = $page['subpage'];
        // $this->authModel  = new authModel();


        $this->{$_GET['function']}();
    }

    // function login()
    // {
    //     $login =  $this->authModel->getEmail($_POST['email']);

    //     if ($login && password_verify($_POST['Password'], $login['password'])) {

    //         session_start();

    //         $_SESSION['loggedIn_id'] = $login['email'];
    //         $_SESSION['user_type']   = $login['user_type'];
    //         header('Location: ../page/admins.php');
    //         exit;
    //     }

    //     echo "<script>alert('Invalid email or Password!');</script>";


    //     include '../login/login.php';
    // }

    // function register()
    // {
    //     $register = $this->authModel->register($_POST);

    //     echo "<script>alert('Register Succesfully');</script>";

    //     header('../login/login.php');
    //     exit();
    // }
}
