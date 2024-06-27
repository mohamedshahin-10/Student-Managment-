<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mail_status = $_POST['mail_status'];
    
    $sql = "INSERT INTO students (name, email, gender, mail_status) VALUES ('$name', '$email', '$gender', '$mail_status')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add New User</title>
    <style>
        .green-button, .green-link {
            background-color: green;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            display: inline-block;
        }
        .button-container {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h1>Add New User</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br>
        <label for="mail_status">Mail Status:</label>
        <select id="mail_status" name="mail_status" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br>
        <div class="button-container">
            <input type="submit" value="Add User" class="green-button">
            <a href="index.php" class="green-link">Back to Home</a>
        </div>
    </form>
</body>
</html>
<?php
$conn->close();
?>
