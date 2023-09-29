<?php
require_once "../curd_useing_file/inc/functions.php";

if (session_status() === PHP_SESSION_NONE) session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $errors = [];

  /**
   * Snaitiza Input
   */
  foreach ($_POST as $key => $value) $$key = sanitizeInput($value);

  /**
   * Validate Input
   */

  if (empty($name)) $errors[] = 'Name must not be empty!';
  if (minVal($name, 3) || maxVal($name, 20)) $errors[] = "Name must be at least 3 characters or more than 20 characters";

  if (empty($email)) $errors[] = 'email must not be empty!';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Please enter a valid email address";

  if (empty($password)) $errors[] = 'Password must not be empty!';
  if (minVal($password, 8) || maxVal($password, 25)) $errors[] = "Password must be at least 8 characters long and  at least 25 characters long";
  if (!empty($password)) {sha1($password);} 

  if (empty($errors)) {

    $students = json_decode(file_get_contents("../user.json"), true);

    $newStudent = [
      "email" => $email,
      "name" => $name,
      "password" => password_hash($password, true),
    ];

    $students[] = $newStudent;

    file_put_contents("../user.json", json_encode($students));

    redirectTo("../index.php");
  } else {
    $_SESSION['errors'] = $errors;
    redirectTo("../pages/create.php");
  }
}