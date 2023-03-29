<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}

$db_host = 'localhost'; // change this if your database server is on a different host
$db_name = 'vian'; // replace with your database name
$db_user = 'root'; // replace with your database username
$db_pass = ''; // replace with your database password

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

$email = $password = "";
$email_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($email_err) && empty($password_err)) {

        $sql = "SELECT id, email, password FROM users WHERE email = :email";

        if ($stmt = $pdo->prepare($sql)) {

            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

            $param_email = $email;

            if ($stmt->execute()) {

                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $email = $row["email"];
                        $hashed_password = $row["password"];
                        if (password_verify($password, $hashed_password)) {
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            header("location: home.php");
                            exit;
                        } else {
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    $email_err = "No account found with that email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            unset($stmt);
        }
    }

    unset($pdo);
}
?>
