<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
function connectToDatabase() {
    $servername = "localhost";
    $username = "dev";
    $password = "devs";
    $dbname = "pokemondisplaysystem";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function executeQuery($conn, $sql, $params = []) {
    try {
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            throw new Exception($conn->error);
        }

        $isSelectQuery = stripos($sql, 'SELECT') === 0;

        if (!empty($params)) {
            $types = str_repeat('s', count($params));
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();

        if ($isSelectQuery) {
            $result = $stmt->get_result();
            if ($result === FALSE) {
                throw new Exception($stmt->error);
            }
            return $result;
        }

        return $stmt->affected_rows; // Return affected rows for non-SELECT queries
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        if ($stmt !== null) {
            $stmt->close();
        }
        $conn->close();
        $conn = connectToDatabase();
        return executeQuery($conn, $sql, $params);
    }
}

function addUser($conn) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (!isset($_POST['loginUsername'], $_POST['loginEmail'], $_POST['loginPassword'])) {
        echo "All fields are required.";
        return;
    }

    $username = $_POST['loginUsername'];
    $email = $_POST['loginEmail'];
    $password = password_hash($_POST['loginPassword'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user_account (Username, Email, Password) VALUES (?, ?, ?)";
    $result = executeQuery($conn, $sql, [$username, $email, $password]);

    if ($result > 0) {
        session_start();
        $_SESSION['Username'] = $username;
        $_SESSION['Email'] = $email;
        header("Location: home.php");
        exit();
    } else {
        $error = "Error adding user. Please try again.";
        $_SESSION['register_error'] = $error;
        header("Location: index.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['loginUser'])) {
    $conn = connectToDatabase();
    addUser($conn);
}
?>
</body>
</html>
'Dont Move This it does not work if it gets move this stays'
