<?php
// establish database connection
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

// check if form was submitted
if(isset($_POST['submit'])) {
    // sanitize input data
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    // validate input data
    $errors = [];
    if(empty($username)) {
        $errors[] = "Username is required.";
    }
    if(empty($email)) {
        $errors[] = "Email is required.";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if(empty($password)) {
        $errors[] = "Password is required.";
    }

    // insert user into database if input data is valid
    if(empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashed_password]);
        echo "<script>alert('User registered successfully.');</script>";
        header("location: index.php");
    } else {
        // display errors if input data is invalid
        foreach($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <style>
        body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
    font-size: 16px;
    margin: 0;
}

h1 {
    text-align: center;
    margin-top: 50px;
}

form {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
    margin: 50px auto;
    max-width: 500px;
    padding: 30px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    border-radius: 3px;
    border: 1px solid #ccc;
    font-size: 16px;
    padding: 10px;
    width: 100%;
    margin-bottom: 20px;
}

input[type="submit"] {
    background-color: #4CAF50;
    border: none;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    padding: 10px 20px;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}

p {
    margin-top: 20px;
    text-align: center;
}

a {
    color: #4CAF50;
}
</style>
</head>
<body>
    <h1>Registration</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" name="submit" value="Register">

        <p>Registered ? <a href="index.php">Login</a></p>
    </form>
</body>
</html>
