CREATE DATABASE student_db;
 USE student_db;
 CREATE TABLE students (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(50),
 email VARCHAR(50),
 phone VARCHAR(15),
 course VARCHAR(30)
 );
 <html>
 <head>
 <title>Student Registration</title>
 </head>
 <body>
 <h2>Student Registration Form</h2>
 <form method="POST">
 Name:
 <input type="text" name="name"
 value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
 <br><br>
 Email:
 <input type="email" name="email"
 value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
 <br><br>
 Phone:
 <input type="text" name="phone"
 value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
 <br><br>
 Course:
 <input type="text" name="course"
 value="<?php echo htmlspecialchars($_POST['course'] ?? ''); ?>">
 <br><br>
 <input type="submit" name="submit" value="Register">
 </form>

 <?php
 $conn = mysqli_connect("localhost", "root", "", "student_db");
 if (!$conn) {
 die("Database Connection Failed");