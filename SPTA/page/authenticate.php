<?php
//model
require_once(__DIR__ . '/../model/authModel.php');

//global variable
$page['page'] = 'Authenticate';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'login';

//check for an action
if (isset($_GET['function'])) {
    //instanciate
    new ActiveAuthenticate($page);
} else {
    //instanciate
    new Authenticate($page);
}
#------CLASSES
//the default class
class Authenticate
{
    //encapsulation
    private $page = '';
    private $subpage = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property values
        $this->subpage = $page['subpage']; //assigned the property values

        //run the method
        $this->{$page['subpage']}();
    }

    function login()
    {
        include(__DIR__ . '/../login/login.php'); // get the views
    }

    function register()
    {
        include(__DIR__ . '/../login/login.php');
    }
}

//if there is an action
class ActiveAuthenticate
{
    //encapsulation
    private $page = '';
    private $subpage = '';
    protected $authModel = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property values
        $this->subpage = $page['subpage']; //assigned the property values
        $this->authModel = new authModel();

        //run the method
        if (isset($_GET['function'])) {
            $this->{$_GET['function']}();
        }
    }
    function register()
    {

        if ($this->authModel->register($_POST)) {

            header("Location: authenticate.php?subpage=register");
            echo "<script>alert('Register Successfully!');</script>";
            exit;
        } else {
            echo "Registration Failed!";
        }
    }

    function login()
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: authenticate.php?subpage=login");
        exit;
    }

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $login = $this->authModel->login($username);

    if ($login && password_verify($password, $login['password'])) {

        session_start();

        $_SESSION['user_id'] = $login['id'];
        $_SESSION['username'] = $login['username'];
        $_SESSION['role'] = $login['role'];
        $_SESSION['user_type'] = $login['user_type'];

        // ✅ ROLE BASED REDIRECT
        if ($login['user_type'] == 'Teacher') {

            switch ($login['role']) {

                case 'Admin':
                    header('Location: ../page/admin_dashboard.php');
                    break;
                    

                case 'Principal':
                    header('Location: ../page/principal_dashboard.php');
                    break;

                case 'Treasurer':
                    header('Location: ../page/treasurer_dashboard.php');
                    break;

                case 'Secretary':
                    header('Location: ../page/secretary_dashboard.php');
                    break;

                default:
                    header('Location: ../page/teacher_dashboard.php');
                    break;
            }

        } elseif ($login['user_type'] == 'Parent') {

            header('Location: ../page/parent_dashboard.php');
        }

        exit;

    } else {

        echo "<script>alert('Invalid Username or Password!');</script>";
        include(__DIR__ . '/../login/login.php');
    }
}
}