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
        $command = "welcome";
        if (isset($this->input["command"]))
            $command = $this->input["command"];

        switch($command) {
            case "login":
                $this->login();
            case "signup":
                $this->signup();
                break;
            case "logout":
                $this->logout();
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
        // ^^ modify later to include from src/ directory
    }

    /**
     * Handle user registration and log-in
     * 
     * 
     * This is probably broken right now... needs to be modified further to support account creation
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
                    $_SESSION["name"] = $res[0]["name"];
                    $_SESSION["email"] = $res[0]["email"];
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

    public function signup() {
        $this->showSignup();

        if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["passwd"]) && !empty($_POST["passwd"])) {

            // Check if user is in database
            $res = $this->db->query("select * from users where email = $1;", $_POST["email"]);
            if (empty($res)) {
                // User not in database, add them

                // ...
            } else {
                // User in database, redirect home
                $this->showHome();
            }
        } else {
            $this->errorMessage = "Name, email, and password are required.";
        }
    }

    /**
     * Log out the user
     */
     public function logout() {
        session_destroy();
        session_start();
    }
}
