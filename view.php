<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);
$student = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Student</title>
    <style>
        .green-link {
            background-color: green;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>View Student</h1>
    <?php if ($student): ?>
        <p>ID: <?php echo htmlspecialchars($student['id']); ?></p>
        <p>Name: <?php echo htmlspecialchars($student['name']); ?></p>
        <p>Email: <?php echo htmlspecialchars($student['email']); ?></p>
        <p>Gender: <?php echo htmlspecialchars($student['gender']); ?></p>
        <p>Mail Status: <?php echo htmlspecialchars($student['mail_status']); ?></p>
        <a href="index.php" class="green-link">Back to Home</a>
    <?php else: ?>
        <p>Student not found.</p>
        <a href="index.php" class="green-link">Back to Home</a>
    <?php endif; ?>
</body>
</html>
<?php
$conn->close();
?>
