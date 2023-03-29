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

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}

h2 {
  text-align: center;
  margin-top: 50px;
  margin-bottom: 30px;
  font-size: 36px;
  color: #444;
}

form {
  width: 400px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  padding: 40px;
}

label {
  display: block;
  margin-bottom: 8px;
  font-size: 16px;
  color: #555;
}

input[type="email"], input[type="password"] {
  width: 100%;
  padding: 12px;
  margin-bottom: 20px;
  box-sizing: border-box;
  border-radius: 4px;
  border: 1px solid #ccc;
  font-size: 16px;
  color: #555;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  padding: 12px 20px;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

p {
  text-align: center;
  font-size: 16px;
  color: #555;
  margin-top: 20px;
}
</style>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">

        <p>Have No Account ? <a href="register.php">Register Here</p>
    </form>
</body>
</html>
