<?php

class FrontController {

    private $input = [];
    private $db;
    private $errorMessage = "";

    /**
     * Constructor
     */
    public function __construct($input) {
        session_start();
        $this->db = new Database();
        $this->input = $input;
    }

    /**
     * Run the server
     * 
     * Given the input (usually $_GET), then it will determine
     * which command to execute based on the given "command"
     * parameter.  Default is the welcome page.
     */
    public function run() {
        // Get the command
        $command = "home";
        if (isset($this->input["command"])) {
            $command = $this->input["command"];
        }

        switch($command) {
            case "login":
                $this->login();
                break;
            case "signup":
                $this->signup();
                break;
            case "logout":
                $this->logout();
                break;
            case "map":
                $this->showMap();
                break;
            case "list":
                $this->showList();
                break;
            case "about":
                $this->showAbout();
                break;
            default:
                $this->showHome();
                break;
        }
    }

    /**
     * Display a given page.
     */
    public function display($page, $message = "") {
        include "templates/navbar.php";
        include "templates/$page.php";
        include "templates/footer.php";
        // ^ modify later to include from src/ directory
    }

    /**
     * Show Pages
     */
    public function showHome() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("home", $message);
    }
    public function showMap() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("map", $message);
    }
    public function showList() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("list", $message);
    }
    public function showAbout() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("about", $message);
    }
    public function showSignup() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        include "templates/signup.php";
        include "templates/footer.php";
        // ^^ modify later to include from src/ directory
    }

    /**
     * Handle user log-in
     */
    public function login() {
        // need an email and password
        if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["passwd"]) && !empty($_POST["passwd"])) {

            // Check if user is in database
            $res = $this->db->query("select * from users where email = $1;", $_POST["email"]);
            if (!empty($res)) {
                // User was in the database, verify password
                if (password_verify($_POST["passwd"], $res[0]["password"])) {
                    // Password was correct
                    $_SESSION["username"] = $res[0]["username"];
                    $_SESSION["email"] = $res[0]["email"];
                    $_SESSION["signedin"] = true;
                    header("Location: ?command=home");
                    return;
                } else {
                    $this->errorMessage = "Incorrect password.";
                }
            } else {
                // User not in database, go to sign up
                $this->signup();
            }
        } else {
            $this->errorMessage = "Please enter your email and password.";
        }
        // If something went wrong, show the welcome page again
        $this->showHome();
    }

    /**
     * Handle user registration
     */
    public function signup() {
        $this->showSignup();

        if (isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["email"]) 
        && !empty($_POST["email"]) && isset($_POST["passwd"]) && !empty($_POST["passwd"])) {
            // Check if user is in database
            $res = $this->db->query("select * from users where email = $1;", $_POST["email"]);
            if (empty($res)) {
                // User not in database, add them
                $this->db->query(
                    "insert into users (username, email, password) values ($1, $2, $3);",
                    $_POST["username"],
                    $_POST["email"],
                    password_hash($_POST["passwd"], PASSWORD_DEFAULT)
                );
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["signedin"] = true;
                return;
            } else {
                // User in database, redirect to home
                $this->errorMessage = "There is already an account associated with this email, please sign in.";
                $this->showHome();
            }
        } else {
            $this->errorMessage = "Username, email, and password are required.";
        }
    }

    /**
     * Log out the user
     */
    public function logout() {
        session_destroy();
        header("Location: ?command=home");
        session_start();
    }

    public function returnUserInfo() {
        $res = $this->db->query("select * from users where email = $1;", $_SESSION["email"]);
        if (!empty($res)) {
            $user = $res[0];
            $userInfo = array(
                "username" => $user["username"],
                "email" => $user["email"]
            );
            header('Content-Type: application/json');
            echo json_encode($userInfo);
        } else {
            header('HTTP/1.1 404 Not Found');
            echo "User not found";
        }
    }
}