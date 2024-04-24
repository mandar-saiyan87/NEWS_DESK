<?php
include('api/database.php');

if (isset($_GET['id']) && $_SESSION['usertype'] === 'admin') {
  // echo ($_GET['id']);
  extract($_GET);
  $delete_query = "delete from news where id=$id ";
  try {
    $res = $db_connected->query($delete_query);
    if ($res) {
      $_SESSION['success'] = 'News post deleted successfully';
    } else {
      $_SESSION['failed'] = 'Couldn\'t delete news. Something went wrong!';
    }
    header('LOCATION: admin.php');
    exit;
  } catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
    exit;
  }
}
