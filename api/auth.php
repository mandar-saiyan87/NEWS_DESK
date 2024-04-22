<?php
session_start();
// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Importing DB Connection
include('database.php');

// $response = [
//   "status" => "Success",
//   "code" => 200
// ];

// echo json_encode($response);

// New User Signup

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'signup') {
  try {
    extract($_POST);
    $pass_hash = password_hash($passwd, PASSWORD_DEFAULT);

    // check if already exist
    $email_exist = "select * from users where email='$email'";
    $exist_res = $db_connected->query($email_exist);

    if ($exist_res->num_rows > 0) {
      echo json_encode(
        [
          'code' => 400,
          'message' => 'Email already exists'
        ]
      );
      exit;
    }
    // If email not already exist
    $sql_query = "insert into users (type, email, password) values ('subscriber', '$email', '$pass_hash')";

    $res = $db_connected->query($sql_query);
    if ($res) {
      echo json_encode(
        [
          'code' => 200,
          'message' => 'Signed Up User Successfully'
        ]
      );
    } else {
      echo json_encode(
        [
          'code' => 500,
          'message' => 'Something went wrong, Please try again!'
        ]
      );
    }
  } catch (Exception $e) {
    echo json_encode(
      [
        'code' => 500,
        'message' => 'An error occurred: ' . $e->getMessage()
      ]
    );
  }
}


// User login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'login') {
  try {
    extract($_POST);
    // echo json_encode($_POST)
    $sql_query = "select * from users where email='$email'";
    $res = $db_connected->query($sql_query);
    $userData = $res->fetch_all(MYSQLI_ASSOC);
    // echo json_encode($userData);
    if (!empty($userData)) {
      if (password_verify($passwd, $userData[0]['password'])) {
        $_SESSION['logged-in'] = true;
        $_SESSION['userId'] = $userData[0]['id'];
        $_SESSION['email'] = $userData[0]['email'];
        $_SESSION['usertype'] = $userData[0]['type'];
        echo json_encode(
          [
            'code' => 200,
            'message' => 'User login successfully',
            'userId' =>  $userData[0]['id'],
            'userEmail' => $userData[0]['email'],
            'userType' => $userData[0]['type']
          ]
        );
      } else {
        echo json_encode(
          [
            'code' => 401,
            'message' => 'Wrong password'
          ]
        );
      }
    } else {
      echo json_encode(
        [
          'code' => 404,
          'message' => 'No user found'
        ]
      );
    }
  } catch (Exception $e) {
    echo json_encode(
      [
        'code' => 500,
        'message' => 'An error occurred: ' . $e->getMessage()
      ]
    );
  }
}


// User Logout
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'logout') {
  try {
    session_unset();
    session_destroy();

    echo json_encode(

      [
        'code' => 200,
        'message' => 'Logout successful'
      ]
    );
  } catch (Exception $e) {
    echo json_encode(
      [
        'code' => 500,
        'message' => 'An error occurred: ' . $e->getMessage()
      ]
    );
  }
}
