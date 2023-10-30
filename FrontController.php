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
        // $this->db = new Database();
        
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
    public function display($page) {
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
        $this->display("home");
    }
    public function showMap() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("map");
    }
    public function showList() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("list");
    }
    public function showAbout() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("about");
    }

    /**
     * Handle user registration and log-in
     */
    public function login() {
        // need a name, email, and password
        if(isset($_POST["fullname"]) && !empty($_POST["fullname"]) &&
            isset($_POST["email"]) && !empty($_POST["email"]) &&
            isset($_POST["passwd"]) && !empty($_POST["passwd"])) {

                // Check if user is in database
                $res = $this->db->query("select * from users where email = $1;", $_POST["email"]);
                if (empty($res)) {
                    // User was not there, so insert them
                    $this->db->query("insert into users (name, email, password, score) values ($1, $2, $3, $4);",
                        $_POST["fullname"], $_POST["email"],
                        password_hash($_POST["passwd"], PASSWORD_DEFAULT), 0);
                    $_SESSION["name"] = $_POST["fullname"];
                    $_SESSION["email"] = $_POST["email"];
                    $_SESSION["score"] = 0;
                    // Send user to the appropriate page (home)
                    header("Location: ?command=home");
                    return;
                } else {
                    // User was in the database, verify password
                    if (password_verify($_POST["passwd"], $res[0]["password"])) {
                        // Password was correct
                        $_SESSION["name"] = $res[0]["name"];
                        $_SESSION["email"] = $res[0]["email"];
                        $_SESSION["score"] = $res[0]["score"];
                        header("Location: ?command=home");
                        return;
                    } else {
                        $this->errorMessage = "Incorrect password.";
                    }
                }
        } else {
            $this->errorMessage = "Name, email, and password are required.";
        }
        // If something went wrong, show the welcome page again
        $this->showHome();
    }

    /**
     * Log out the user
     */
     public function logout() {
        session_destroy();
        session_start();
    }
}