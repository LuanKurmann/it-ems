<?php
namespace App\Controllers;

use App\Models\User;
use Symfony\Component\Routing\RouteCollection;
use PDO;

class LoginController {

    /**
     * Handles the login form submission and authenticates the user.
     *
     * @param RouteCollection $routes
     * @return void
     * 
     * @author Luca Lehmann <lle129572@stud.gibb.ch>
     */
    public function indexAction(RouteCollection $routes)
    {
        $message = '';

        try {
            // Connect to the database
            $pdo = new PDO('mysql:host=' . constant('DB_HOST') . ';' . 'dbname=' . constant('DB_NAME'), constant('DB_USER'), constant('DB_PASS'));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Check if the form has been submitted
            if (isset($_POST["login"])) {
                // Validate the form data
                if (empty($_POST["username"]) || empty($_POST["password"])) {
                    $message = 'Bitte füllen Sie alle Felder aus.';
                } else {
                    // Check the username and password against the database
                    $password = hash('sha256', constant('SALT') . $_POST["password"] . constant('PEPPER'));
                    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
                    $statement = $pdo->prepare($query);
                    $statement->execute(
                        array(
                            'username' => $_POST["username"],
                            'password' => $password,
                        )
                    );
                    $count = $statement->rowCount();
                    if ($count > 0) {
                        // Start the session and store the user's information
                        session_start();
                        $user = $statement->fetch(PDO::FETCH_ASSOC);
                        $_SESSION["username"] = $user["username"];
                        $_SESSION["firstname"] = $user["firstname"];
                        $_SESSION["name"] = $user["name"];
                        $_SESSION["email"] = $user["email"];
                        header('Location: ' . URL_SUBFOLDER);
                    } else {
                        $message = 'Falsche Daten, bitte versuchen Sie es erneut.';
                    }
                }
            }
        } catch (PDOException $error) {
            $message = $error->getMessage();
        }
        require_once APP_ROOT . '/views/login.php';
	}
}