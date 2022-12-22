<?php

namespace App\Controllers;

use App\Models\User;
use Symfony\Component\Routing\RouteCollection;
use PDO;

class RegistrationController
{

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
            if (isset($_POST["register"])) {
                // Validate the form data
                if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["firstname"]) || empty($_POST["name"]) || empty($_POST["email"])) {
                    $message = 'Bitte füllen Sie alle Felder aus.';
                } else {
                    // Validate the username using regex
                    if (!preg_match('/^[a-zA-Z0-9]{3,16}$/', $_POST["username"])) {
                        $message = 'Der Benutzername darf nur alphanumerische Zeichen enthalten und muss zwischen 3 und 16 Zeichen lang sein.';
                    }
                    if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST["email"])) {
                        $message = 'Bitte geben Sie eine gültige E-Mail-Adresse ein.';
                    } else {
                        // Check if the username is already taken
                        $query = "SELECT * FROM users WHERE username = :username";
                        $statement = $pdo->prepare($query);
                        $statement->execute(array('username' => $_POST["username"]));
                        $count = $statement->rowCount();
                        if ($count > 0) {
                            $message = 'Dieser Benutzername ist bereits vergeben.';
                        } else {
                            // Insert the new user into the database
                            $password = hash('sha256', constant('SALT') . $_POST["password"] . constant('PEPPER'));
                            $query = "INSERT INTO users (username, password, firstname, name, email) VALUES (:username, :password, :firstname, :name, :email)";
                            $statement = $pdo->prepare($query);
                            if ($statement->execute(
                                [
                                    'username' => $_POST["username"],
                                    'password' => $password,
                                    'firstname' => $_POST["firstname"],
                                    'name' => $_POST["name"],
                                    'email' => $_POST["email"],
                                ]
                            )) {
                                $message = 'Ihr Benutzerkonto wurde erfolgreich erstellt. Weiterleitung in Kürze.';
                                header('Location:' . URL_SUBFOLDER);
                                exit;
                            }
                        }
                    }
                }
            }
        } catch (PDOException $error) {
            $message = $error->getMessage();
        }
        require_once APP_ROOT . '/views/registration.php';
    }
}
