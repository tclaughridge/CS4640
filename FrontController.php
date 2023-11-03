<?php

// SITE URL: https://cs4640.cs.virginia.edu/tcl5tu/sprint3/?command=home
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
                $this->showSignup();
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
            case "manageFavorites":
                $this->manageFavorites();
                break;
            case "profile":
                $this->showProfile();
                break;
            case "deleteUser":
                $this->deleteUser();
                break;
            default:
                $this->showHome();
                break;
        }
    }

    /**
     * Display a given page.
     */
    public function display($page, $message = "", $data = []) {
        $path = "/students/tcl5tu/students/tcl5tu/src/sprint3/templates";
        include "$path/navbar.php";
        include "$path/$page.php";
        include "$path/footer.php";
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
        $arr = $this->listLocations();
        $this->display("list", $message, $arr);
    }
    public function showAbout() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("about", $message);
    }
    public function showFavorites() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("favorites", $message);
    }
    public function showSignup() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->signup();
        include "/students/tcl5tu/students/tcl5tu/src/sprint3/templates/signup.php";
        include "/students/tcl5tu/students/tcl5tu/src/sprint3/templates/footer.php";
    }
    public function showProfile() {
        $message = "";
        if (!empty($this->errorMessage)) {
            $message .= "<p class='alert alert-danger'>".$this->errorMessage."</p>";
        }
        $this->display("profile", $message);
    }

    /**
     * Retrieve locations from database and sort them by section
     */
    public function listLocations() {
        $dorms = [];
        $central = [];
        $health = [];
        $arts = [];
        $misc = [];

        $res = $this->db->query("select * from locations;");
        if (!empty($res)) {
            foreach ($res as $x) {
                $location = array(
                    "name" => $x["name"],
                    "section" => $x["section"],
                    "food" => $x["food"],
                    "coffee" => $x["coffee"],
                    "study" => $x["study"]
                );

                if ($x["section"] == "Dorms") {
                    array_push($dorms, $location);
                }
                else if ($x["section"] == "Central Grounds") {
                    array_push($central, $location);
                }
                else if ($x["section"] == "UVA Health") {
                    array_push($health, $location);
                }
                else if ($x["section"] == "Arts Grounds") {
                    array_push($arts, $location);
                }
                else {
                    array_push($misc, $location);
                }
            }
        }
        else {
            $this->errorMessage = "No locations found.";
            return array();
        }
        return array($dorms, $central, $health, $arts, $misc);
    }

    public function manageFavorites() {
        if (isset($_POST["location"])) {
            $res = $this->db->query("select * from userfavorites where user_id = $1 and location_id = $2;", $_SESSION["email"], $_POST["location"]);
            if (empty($res)) {
                $this->db->query("insert into userfavorites (user_id, location_id) values ($1, $2);", $_SESSION["email"], $_POST["location"]);
            }
            else {
                $this->db->query("delete from userfavorites where user_id = $1 and location_id = $2;", $_SESSION["email"], $_POST["location"]);
            }
        }
        header("Location: ?command=list");
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
                    setcookie('email_cookie', $_SESSION["email"], time() + (86400 * 30), "/");
                    header("Location: ?command=home");
                    return;
                } else {
                    $this->errorMessage = "Incorrect password.";
                }
            } else {
                // User not in database, go to sign up
                $this->errorMessage = "No account found with this email, please <a href='?command=signup'>sign up</a>.";
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
        if (isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["email"]) 
        && !empty($_POST["email"]) && isset($_POST["passwd"]) && !empty($_POST["passwd"])) {
            $pattern = "/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W)$/";
            if (!preg_match($pattern, $_POST["passwd"])) {
                $this->errorMessage = "Password must contain at least one number, one uppercase letter, one lowercase letter, and one special character.";
                return;
            }

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
                setcookie('email_cookie', $_SESSION["email"], time() + (86400 * 30), "/");
                header("Location: ?command=home");
                return;
            } else {
                // User in database, redirect to login
                $this->errorMessage = "There is already an account associated with this email, please sign in.";
                $this->showHome();
                return;
            }
        } else {
            $this->errorMessage = "Username, email, and password are required.";
        }
    }

    public function deleteUser() {
        if (isset($_POST["delete"])) {
            $res = $this->db->query("delete * from users where email = $1;", $_SESSION["email"]);
            $this->logout();
        } else {
            $this->errorMessage = "No user found";
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
            $this->errorMessage = "No user found.";
        }
    }
}