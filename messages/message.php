<?php
if (isset($_SESSION['success'])) {
  $message = $_SESSION["success"];
  echo "
       <script>
        setTimeout(() => {
            $('.messages-success').css('display', 'none')
        }, 2000);
    </script>
    <div class='messages-success'>
        <p>$message</p>
    </div>
  ";
  unset($_SESSION['success']);
}
if (isset($_SESSION['failed'])) {
  $message = $_SESSION["failed"];
  echo "
       <script>
        setTimeout(() => {
            $('.messages-error').css('display', 'none')
        }, 2000);
    </script>
    <div class='messages-error'>
        <p>$message</p>
    </div>
  ";
  unset($_SESSION['failed']);
}
if (isset($_SESSION['warning'])) {
  $message = $_SESSION['warning'];
  echo "
       <script>
        setTimeout(() => {
            $('.messages-warning').css('display', 'none')
        }, 2000);
    </script>
    <div class='messages-warning'>
        <p>$message</p>
    </div>
  ";
  unset($_SESSION['warning']);
}
